<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Manual</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 0;
        }

        .content-container {
            margin-top: 80px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.5);
        }

        
    </style>
</head>
<body>
    <!-- Bootstrap Navbar -->
    <?php include 'navbar.php'; ?>
    <?php include 'dash.php'; ?>
    <?php include 'footer.php'; ?>
    

    <!-- User Manual Content -->
    <div class="content-container">
        <h2>User Manual</h2>
        <p>Welcome to the system. Follow these steps to navigate:</p>
        <ul>
            <li><b>Dashboard:</b> View system status and quick actions.</li>
            <li><b>Accounts:</b> Manage user information.</li>
            <li><b>Reports:</b> Access system-generated reports.</li>
            <li><b>Backup & Restore:</b> Secure your data.</li>
            <li><b>Settings:</b> Modify user and system settings.</li>
        </ul>
        <p>For further assistance, contact support.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76Aq4zXbomLwW6fG6UnmyblF9OmKXBmW1R8Zkk5axl7RHEaOsyVj52X1LJq0zB" crossorigin="anonymous"></script>
</body>
</html>
