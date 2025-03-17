..
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Logs</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;

        }

        .log-card {
            background: white;
            color: black;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 600px;
            margin: 20px auto;
        }

       

        table {
            background: white;
            border-radius: 5px;
            overflow: hidden;
        }

        th {
            background: #4caf50;
            color: white;
        }

        button {
            background: #4caf50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover {
            background: #444;
        }



    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>
<div class="wrapper">
    <div class="sidebar">
        <?php require 'dash.php'; ?>
    </div>
    <div class="content">
        <div class="container text-center mt-5" style="margin-top: 300px;">

            <header>
                <h1>System Logs</h1>
            </header>

            <section class="log-card">
                <h3>Activity Logs</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Timestamp</th>
                        <th>Event Type</th>
                        <th>Details</th>
                    </tr>
                    <?php
                    // PHP Code to fetch logs from database
                    ?>
                </table>
            </section>

            <div class="text-center">
                <a href="dashboard.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76Aq4zXbomLwW6fG6UnmyblF9OmKXBmW1R8Zkk5axl7RHEaOsyVj52X1LJq0zB" crossorigin="anonymous"></script>

</body>
</html>
