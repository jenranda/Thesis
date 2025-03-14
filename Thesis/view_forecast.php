<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "weather_db"; // Change this to your actual database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT forecast_date, time, temperature FROM weather_forecast ORDER BY forecast_date DESC, time ASC";
$result = $conn->query($sql);

$forecastHistory = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $forecastHistory[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Weather Forecast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1>Past Weather Forecasts</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Temperature (°C)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($forecastHistory as $forecast): ?>
                <tr>
                    <td><?= htmlspecialchars($forecast['forecast_date']) ?></td>
                    <td><?= htmlspecialchars($forecast['time']) ?></td>
                    <td><?= htmlspecialchars($forecast['temperature']) ?>°C</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
