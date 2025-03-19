<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Move Dashboard Lower */
        .dashboard-container {
            margin-top: 150px; /* Adjusted spacing to move the content lower */
        }

        /* Card Styling */
        .dashboard-card {
            width: 500px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        /* Buttons */
        .btn-custom {
            border-radius: 30px;
            font-weight: bold;
            transition: transform 0.3s ease-in-out;
        }

        .btn-custom:hover {
            transform: scale(1.1);
        }

        /* Footer Styling */
        .footer {
            text-align: center;
            padding: 15px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            font-size: 14px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="user_about.php">About</a>
        </div>
    </nav>

    <!-- Dashboard Content (Moved Lower) -->
    <div class="container dashboard-container d-flex justify-content-center align-items-center">
        <div class="dashboard-card">
            <h1 class="fw-bold text-dark">Welcome, User</h1>
            <p class="text-muted">Check the latest weather forecast and send messages.</p>

            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="user_message.php" class="btn btn-success btn-lg btn-custom">Message</a>
                <a href="user_contact.php" class="btn btn-info btn-lg btn-custom">Contact</a>
            </div>

            <!-- Weather Dashboard -->
            <div class="mt-4">
                <?php include 'weather_dashboard.php'; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
