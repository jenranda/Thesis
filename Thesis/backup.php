  <!-- Calls the Dashboard Buttons -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup & Restore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

  <?php include 'navbar.php'; ?>  <!-- Calls the Navbar -->
  <?php include 'dash.php'; ?>
  <?php include 'footer.php'; ?>

    <!-- Backup & Restore Section -->
    <div class="container backup-restore">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <!-- Backup Database -->
                <div class="card shadow-sm p-3 mb-3">
                    <h3 class="text-center">Backup Database</h3>
                    <form action="backup.php" method="POST">
                        <button type="submit" class="btn btn-success w-100">Create Backup</button>
                    </form>
                </div>
                
                <!-- Restore Database -->
                <div class="card shadow-sm p-3 mb-3">
                    <h3 class="text-center">Restore Database</h3>
                    <form action="restore.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="backup_file" class="form-control my-2" accept=".sql">
                        <button type="submit" class="btn btn-danger w-100">Restore</button>
                    </form>
                </div>

                <!-- Available Backups -->
                <div class="card shadow-sm p-3 mb-3">
                    <h3 class="text-center">Available Backups</h3>
                    <ul class="list-group">
                        <?php // PHP Code to list backups ?>
                    </ul>
                </div>

                <!-- Back to Menu -->
                <div class="text-center">
                    <button onclick="window.location.href='menu.php'" class="btn btn-dark">Back to Menu</button>
                </div>

            </div>
        </div>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76Aq4zXbomLwW6fG6UnmyblF9OmKXBmW1R8Zkk5axl7RHEaOsyVj52X1LJq0zB" crossorigin="anonymous"></script>
    <script src="backup_restore.js"></script>

</body>
</html>
