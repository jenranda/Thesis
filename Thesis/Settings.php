<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "styles.css">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 0;
        }

        /* NAVBAR */
        .navbar {
            background-color: #222;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            gap: 10px;
        }

        .dropdown {
            position: relative;
            margin-right: 15px;
        }

        .dropbtn {
            background-color: #444;
            color: white;
            padding: 12px 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            top: 100%;
            left: 0;
            border-radius: 5px;
            overflow: hidden;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

        /* DASHBOARD BUTTONS */
        .dashboard-buttons {
            display: flex;
            justify-content: center;
            margin-top: 80px; /* Adjusted for navbar */
        }

        .dashboard-buttons button {
            background-color: #4caf50;
            color: white;
            padding: 12px 24px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .dashboard-buttons button:hover {
            background-color: #45a049;
        }

        /* CONTENT */
        .content {
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }

        /* WEATHER WIDGET */
        .weather-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }

        .weather-container h2 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .weather-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            max-width: 400px;
            background-color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            padding: 20px;
        }

        .modal-header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .modal-content {
            padding: 10px;
        }

        .close-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .close-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>



<div class="navbar">
    <div class="dropdown">
        <a class="navbar-brand" href="dashboard.php">Home</a>

        <button class="dropbtn">Navigate</button>
        <div class="dropdown-content">
            <a href="account.php">Accounts</a>
            <a href="reports.php">Reports</a>
            <a href="log.php">Log</a>
            <a href="backup.php">Backup and Restore</a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Settings</button>
        <div class="dropdown-content">
            <a href="updateuser.php">Update User</a>
            <a href="manual.php">User's Manual</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Help</button>
        <div class="dropdown-content">
            <a href="about.php" onclick="openAbout()">About</a>
        </div>
    </div>
</div>

<div class="dashboard-buttons">
    <button onclick="checkConnection()">Connection</button>
    <a href="graph.php"><button>Graph</button></a>
    <a href="message.php"><button>Message</button></a>
    <a href="contact.php"><button>Contacts</button></a>
</div>

<div class="content">
    <h1>Welcome to the System's Dashboard</h1>
    <p>Below is the weekly weather forecast for your area:</p>
    <div class="weather-container" id="weather-container">
        <h2>Weekly Weather Forecast</h2>
        <p class="current-date" id="current-date"></p>
        <div id="weather-list">Loading weather data...</div>
    </div>
</div>

<!-- Modal for Update User -->
<div id="updateUserModal" class="modal">
    <div class="modal-header">Update User Information</div>
    <div class="modal-content">
        <p>Form to update user information goes here.</p>
    </div>
    <button class="close-btn" onclick="closeModal('updateUserModal')">Close</button>
</div>

<!-- Modal for User Manual -->
<div id="userManualModal" class="modal">
    <div class="modal-header">User's Manual</div>
    <div class="modal-content">
        <p>Instructions for using the system go here.</p>
    </div>
    <button class="close-btn" onclick="closeModal('userManualModal')">Close</button>
</div>

<!-- Modal for About -->
<div id="aboutModal" class="modal">
    <div class="modal-header">About This System</div>
    <div class="modal-content">
        <p>This is a flood monitoring dashboard designed to provide real-time updates and alerts.</p>
        <p>Developed by: Your Name</p>
        <p>Version: 1.0</p>
    </div>
    <button class="close-btn" onclick="closeAbout()">Close</button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".dropbtn").forEach(button => {
            button.addEventListener("click", function () {
                const dropdownContent = this.nextElementSibling;
                dropdownContent.classList.toggle("show");

                document.querySelectorAll(".dropdown-content").forEach(content => {
                    if (content !== dropdownContent) {
                        content.classList.remove("show");
                    }
                });
            });
        });

        document.addEventListener("click", function (event) {
            if (!event.target.matches(".dropbtn")) {
                document.querySelectorAll(".dropdown-content").forEach(content => {
                    content.classList.remove("show");
                });
            }
        });

        updateDate();
        fetchWeather();
    });

    function connectionAction() {
        alert("Connection button clicked!");
    }

    function graphAction() {
        alert("Graph button clicked!");
    }

    function messageAction() {
        alert("Message button clicked!");
    }

    function contactsAction() {
        alert("Contacts button clicked!");
    }

    function updateDate() {
        const currentDateElement = document.getElementById('current-date');
        const today = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        currentDateElement.textContent = today.toLocaleDateString('en-US', options);
    }

    async function fetchWeather() {
        try {
            const apiKey = 'b8d19df01092efe297625b28c988b210';
            const city = 'Maigo';
            console.log("Fetching weather data...");
            const response = await fetch(`https://api.openweathermap.org/data/2.5/forecast?q=${city}&units=metric&appid=${apiKey}`);

            if (!response.ok) {
                throw new Error('Failed to fetch weather data.');
            }

            const data = await response.json();
            const weatherList = document.getElementById('weather-list');
            weatherList.innerHTML = '';

            const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

            const dailyForecasts = {};
            data.list.forEach((item) => {
                const date = new Date(item.dt * 1000);
                const day = date.toDateString();
                if (!dailyForecasts[day] || date.getHours() === 12) {
                    dailyForecasts[day] = item;
                }
            });

            Object.keys(dailyForecasts).forEach((day) => {
                const forecast = dailyForecasts[day];
                const date = new Date(forecast.dt * 1000);
                const dayName = days[date.getDay()];
                const temp = forecast.main.temp;
                const description = forecast.weather[0].description;

                const weatherItem = document.createElement('div');
                weatherItem.className = 'weather-item';
                weatherItem.innerHTML = `<span><strong>${dayName}</strong></span> <span>${temp.toFixed(1)}°C - ${description}</span>`;
                weatherList.appendChild(weatherItem);
            });
        } catch (error) {
            console.error("Weather Fetch Error:", error);
            document.getElementById('weather-list').innerHTML = '<p>Unable to load weather data.</p>';
        }
    }

    function openAbout() {
        document.getElementById("aboutModal").style.display = "block";
    }

    function closeAbout() {
        document.getElementById("aboutModal").style.display = "none";
    }

    function openUpdateUser() {
        document.getElementById("updateUserModal").style.display = "block";
    }

    function openUserManual() {
        document.getElementById("userManualModal").style.display = "block";
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    // Close modal if user clicks outside of it
    window.onclick = function(event) {
        const modals = ["updateUserModal", "userManualModal", "aboutModal"];
        modals.forEach(modalId => {
            const modal = document.getElementById(modalId);
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }
</script>

</body>
</html>
