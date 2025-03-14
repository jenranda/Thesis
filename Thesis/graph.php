<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graph Page</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
        }
        .navbar {
            background: #222;
        }
        .buttons .btn {
            font-size: 16px;
            transition: 0.3s ease;
        }
        .buttons .btn:hover {
            transform: scale(1.05);
        }
        .chart-container {
            width: 100%;
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>
    <?php include 'dash.php'; ?>
    
    

        <!-- Graph Component -->
        <div class="d-flex justify-content-center mt-4">
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        function checkConnection() {
            alert("Checking connection...");
        }

        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sample Data',
                    data: [10, 20, 15, 30, 25, 40],
                    borderColor: 'blue',
                    backgroundColor: 'rgba(0, 0, 255, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
