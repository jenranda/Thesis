<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Level Monitoring Reports</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }
        .report-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <!-- Include Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Include Dashboard Buttons -->
    <?php include 'dash.php'; ?>
    <?php include 'connection.php'; ?>
    <?php include 'contact.php'; ?>
    <?php include 'log.php'; ?>

    <!-- Reports Section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="report-card p-3">
                    <h3>Summary Report</h3>
                    <?php // PHP Code to fetch latest water level ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="report-card p-3">
                    <h3>Historical Data</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Date</th>
                            <th>Water Level</th>
                            <th>Status</th>
                        </tr>
                        <?php // PHP Code to fetch historical water level data ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="report-card p-3">
                    <h3>Alerts & Notifications</h3>
                    <ul class="list-group">
                        <?php // PHP Code to fetch alert notifications ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="report-card p-3">
                    <h3>Sensor Performance</h3>
                    <?php // PHP Code to check sensor status ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76Aq4zXbomLwW6fG6UnmyblF9OmKXBmW1R8Zkk5axl7RHEaOsyVj52X1LJq0zB" crossorigin="anonymous"></script>
</body>
</html>
