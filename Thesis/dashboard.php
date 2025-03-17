<?php include 'navbar.php'; ?>  <!-- Include the Navbar -->
<?php include 'dash.php'; ?>
<?php include 'connection.php'; ?>

<?php include 'footer.php'; ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container text-center mt-4">
    <h1>Welcome to the System's Dashboard</h1>
    <p>Below is the weekly weather forecast for your area:</p>

    <?php include 'weather_dashboard.php'; ?> <!-- Calls the Weather Forecast -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76Aq4zXbomLwW6fG6UnmyblF9OmKXBmW1R8Zkk5axl7RHEaOsyVj52X1LJq0zB" crossorigin="anonymous"></script>

</body>
</html>
