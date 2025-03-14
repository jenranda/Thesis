<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Management</title>

    <!-- Load Bootstrap and Custom Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Load Navbar -->
    <?php include 'navbar.php'; ?>
    <?php include 'dash.php'; ?>




   
            <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-8 text-center p-4 bg-light shadow rounded">
        <h2>Accounts Management</h2>
        <button class="btn btn-primary">Add Account</button>
        <button class="btn btn-secondary">Back</button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add table data here -->
            </tbody>
        </table>
    </div>
</div>

    <!-- JavaScript for Weather and Connection Check -->
    <script>
        function checkConnection() {
            alert("Checking connection...");
        }

        </script>
</body>
</html>
