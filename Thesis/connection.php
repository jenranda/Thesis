<!-- connection_button.php -->
<div class="text-center my-3">
   
    <p id="sensorStatus" class="mt-2"></p>
</div>

<script>
    function checkConnection() {
        let isConnected = Math.random() < 0.8; // Simulate connection (80% success rate)
        let statusBox = document.getElementById("sensorStatus");

        if (!statusBox) {
            alert("No status box found!");
            return;
        }

        if (isConnected) {
            statusBox.innerHTML = "Sensor Connected ✅";
            statusBox.style.color = "green";
        } else {
            statusBox.innerHTML = "Sensor Disconnected ❌";
            statusBox.style.color = "red";
        }
    }
</script>
