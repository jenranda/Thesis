<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
         body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 80px; /* Prevent overlap with fixed navbar */
        }
        .navbar {
            background: #222 !important;
        }
        .dashboard-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 80px; /* Further adjusted to move buttons even lower */
        }
        .dashboard-buttons button {
            background-color: #4caf50;
            color: white;
            padding: 12px 24px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .dashboard-buttons button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Navigate</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account.php">Accounts</a></li>
                        <li><a class="dropdown-item" href="reports.php">Reports</a></li>
                        <li><a class="dropdown-item" href="log.php">Log</a></li>
                        <li><a class="dropdown-item" href="backup.php">Backup and Restore</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Settings</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="updateuser.php">Update User</a></li>
                        <li><a class="dropdown-item" href="manual.php">User's Manual</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Help</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about.php">About</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
