<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'water_level_system';

// Database Connection
function connectDB() {
    global $host, $username, $password, $database;
    return new mysqli($host, $username, $password, $database);
}

// Handle Backup
if (isset($_POST['action']) && $_POST['action'] === 'backup') {
    $backupFolder = __DIR__ . '/backups';
    if (!is_dir($backupFolder)) {
        mkdir($backupFolder, 0777, true);
    }

    $backupFile = $backupFolder . '/backup_' . date('Y-m-d_H-i-s') . '.sql';

    // MySQL Dump Command
    $command = "C:\\xampp\\mysql\\bin\\mysqldump.exe --user=$username --password=$password $database > \"$backupFile\"";
    exec($command, $output, $result);

    if ($result === 0) {
        $backupContent = addslashes(file_get_contents($backupFile));
        $conn = connectDB();
        $conn->query("INSERT INTO backup_logs (filename, backup_time, action, backup_file) 
                      VALUES ('$backupFile', NOW(), 'Backup', '$backupContent')");
        $conn->close();
        echo json_encode(['success' => true, 'message' => 'Backup successful!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Backup failed!']);
    }
    exit;
}

// Handle Fetch Logs
if (isset($_GET['action']) && $_GET['action'] === 'fetch_logs') {
    $conn = connectDB();
    $result = $conn->query("SELECT * FROM backup_logs ORDER BY backup_time DESC");

    $logs = [];
    while ($row = $result->fetch_assoc()) {
        $fileExists = file_exists($row['filename']) ? '' : '(File Missing, Stored in Database)';
        $logs[] = [
            'filename' => basename($row['filename']),
            'backup_time' => $row['backup_time'],
            'action' => $row['action'],
            'status' => $fileExists
        ];
    }
    $conn->close();
    echo json_encode($logs);
    exit;
}

// Handle Restore
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['backupFile'])) {
    $backupFile = $_FILES['backupFile']['tmp_name'];
    $fileName = $_FILES['backupFile']['name'];

    if (pathinfo($fileName, PATHINFO_EXTENSION) !== 'sql') {
        echo json_encode(['success' => false, 'message' => 'Invalid file format. Only .sql files are allowed.']);
        exit;
    }

    $backupPath = __DIR__ . '/backups/' . $fileName;

    if (!file_exists($backupPath)) {
        $conn = connectDB();
        $result = $conn->query("SELECT backup_file FROM backup_logs WHERE filename = '$fileName' LIMIT 1");
        $data = $result->fetch_assoc();
        $conn->close();

        if ($data) {
            file_put_contents($backupFile, $data['backup_file']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Backup file not found in the database.']);
            exit;
        }
    }

    // MySQL Restore Command
    $command = "C:\\xampp\\mysql\\bin\\mysql.exe --user=$username --password=$password $database < \"$backupFile\"";
    exec($command, $output, $result);

    $conn = connectDB();
    $conn->query("INSERT INTO backup_logs (filename, backup_time, action) VALUES ('$fileName', NOW(), 'Restored')");
    $conn->close();

    echo json_encode(['success' => $result === 0, 'message' => $result === 0 ? 'Database restored successfully!' : 'Restoration failed.']);
    exit;
}
?>
