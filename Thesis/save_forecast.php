<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fmdb"; // Change this to your actual database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get JSON input from JavaScript
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    foreach ($data as $forecast) {
        $city = $conn->real_escape_string($forecast['city']);
        $forecast_date = $conn->real_escape_string($forecast['forecast_date']);
        $time = $conn->real_escape_string($forecast['time']);
        $temperature = $conn->real_escape_string($forecast['temperature']);

        $sql = "INSERT INTO weather_forecast (city, forecast_date, time, temperature)
                VALUES ('$city', '$forecast_date', '$time', '$temperature')";

        $conn->query($sql);
    }
    echo "Weather data saved successfully!";
} else {
    echo "No data received.";
}

$conn->close();
?>
