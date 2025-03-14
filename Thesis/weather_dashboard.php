<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Weather Forecast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .weather-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            font-size: 18px;
        }
        .weather-item {
            font-size: 16px;
            margin: 5px 0;
        }
        .filter-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .weekly-forecast {
            margin-top: 30px;
            margin-bottom: 50px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .weekly-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="container text-center mt-4">
    <h1>Weekly Weather Forecast</h1>
    <p class="current-date" id="current-date"></p>

    <!-- Filter Section -->
    <div class="filter-container">
        <label for="date-picker">Select Date:</label>
        <input type="date" id="date-picker" class="form-control d-inline-block w-auto" />
        <button class="btn btn-primary btn-sm" onclick="fetchWeather(); fetchPastForecast();">
    View Forecast
</button>

    </div>

    <!-- Daily Weather Forecast -->
    <div class="weather-container" id="weather-container">
        <h2>Weather Forecast</h2>
        <div id="weather-list">Loading weather data...</div>
    </div>

    <!-- Weekly Summary -->
    <div class="weekly-forecast">
        <h2>Weekly Forecast</h2>
        <div id="weekly-list">Loading weekly forecast...</div>
    </div>

    
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        updateDate();
        fetchWeather();
    });

    function updateDate() {
        const currentDateElement = document.getElementById('current-date');
        const today = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        currentDateElement.textContent = today.toLocaleDateString('en-US', options);

        document.getElementById("date-picker").valueAsDate = today;
    }

    async function fetchWeather() {
        try {
            const apiKey = 'b8d19df01092efe297625b28c988b210';
            const city = 'Maigo';
            const selectedDate = document.getElementById("date-picker").value;

            if (!selectedDate) {
                alert("Please select a date.");
                return;
            }

            const apiUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&units=metric&appid=${apiKey}`;
            const response = await fetch(apiUrl);
            if (!response.ok) throw new Error('Failed to fetch weather data.');

            const data = await response.json();
            if (!data.list || data.list.length === 0) {
                throw new Error('No weather data available.');
            }

            // Process daily forecast
            const dailyForecasts = data.list.filter(forecast => {
                return new Date(forecast.dt * 1000).toISOString().split("T")[0] === selectedDate;
            });

            let weatherHTML = "";
            let forecastData = [];

            if (dailyForecasts.length === 0) {
                weatherHTML = `<p style="color: red;">No data available for the selected date.</p>`;
            } else {
                dailyForecasts.forEach(forecast => {
                    let date = new Date(forecast.dt * 1000);
                    let formattedTime = date.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
                    let temperature = forecast.main.temp.toFixed(2);

                    weatherHTML += `<div class="weather-item">${formattedTime} - ${temperature}°C</div>`;

                    forecastData.push({
                        city: city,
                        forecast_date: selectedDate,
                        time: formattedTime,
                        temperature: temperature
                    });
                });
            }

            document.getElementById('weather-list').innerHTML = weatherHTML;

            // Send forecast data to the database
            saveWeatherData(forecastData);

            // Process weekly forecast
            const weeklyForecast = {};
            data.list.forEach(forecast => {
                let forecastDate = new Date(forecast.dt * 1000).toISOString().split("T")[0];

                if (!weeklyForecast[forecastDate]) {
                    weeklyForecast[forecastDate] = { totalTemp: 0, count: 0 };
                }

                weeklyForecast[forecastDate].totalTemp += forecast.main.temp;
                weeklyForecast[forecastDate].count += 1;
            });

            document.getElementById('weekly-list').innerHTML = Object.entries(weeklyForecast).map(([date, tempData]) => {
                let avgTemp = (tempData.totalTemp / tempData.count).toFixed(2);
                return `<div class="weekly-item"><strong>${date}</strong> - Avg Temp: ${avgTemp}°C</div>`;
            }).join('');

        } catch (error) {
            document.getElementById('weather-list').innerHTML = `<p style="color: red;">Error: ${error.message}</p>`;
            document.getElementById('weekly-list').innerHTML = `<p style="color: red;">Error loading weekly forecast.</p>`;
        }
    }

    // Function to send forecast data to the database
    async function saveWeatherData(forecastData) {
        try {
            const response = await fetch("save_forecast.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(forecastData)
            });

            const result = await response.text();
            console.log(result);
        } catch (error) {
            console.error("Error saving weather data:", error);
        }
    }
</script>

</body>
</html>
