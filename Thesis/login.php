<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "styles.css">
    <title>Login Page</title>
    <style>
       body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="text"], .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .login-container button:hover {
            background-color: #218838;
        }
        .back-btn {
            background-color: #007bff;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <input type="text" id="user id" placeholder="User ID" required>
    <input type="text" id="username" placeholder="Username" required>
    <input type="password" id="password" placeholder="Password" required>
    
    <button class="back-btn" onclick="goBack()">Back</button>
    <button onclick="login()">Log In</button>
    
    <div id="error" class="error-message"></div>
</div>

<script>
    function goBack() {
        window.location.href = 'first.html'; // Replace 'index.html' with your actual front page URL
    }

    function login() {
        var userid = document.getElementById('user id').value;
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var errorMessage = document.getElementById('error');

        if (userid === '' || username === '' || password === '') {
            errorMessage.textContent = 'Please fill out all fields!';
        } else {
            errorMessage.textContent = '';
            alert('Successfully logged in!');
            window.location.href = 'dashboard.php'; // Replace 'dashboard.html' with your dashboard page URL
        }
    }
</script>

</body>
</html>
