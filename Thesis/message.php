<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Box</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Custom Styles -->
</head>
<body>

    <!-- Include Navbar & Dashboard -->
    <?php 
        include 'navbar.php'; 
        include 'dash.php';  // Ensure this contains the Message button with id="dashboardMessageBtn"
    ?>

    <!-- Message Box Section (Initially Hidden) -->
    <div id="message-section" class="container mt-4 d-none">
        <div class="message-box p-4 border rounded shadow bg-light">
            <h2 class="mb-3">Send a Message</h2>
            <textarea id="messageInput" class="form-control mb-3" placeholder="Type your message..." rows="4"></textarea>
            <div class="d-flex justify-content-end">
                <button id="sendMessageBtn" class="btn btn-primary me-2">Send</button>
                <button id="closeMessageBtn" class="btn btn-danger">Close</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Message Box Toggle -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
    let messageSection = document.getElementById("message-section");
    let messageBtn = document.getElementById("dashboardMessageBtn"); // The button in dash.php
    let closeMessageBtn = document.getElementById("closeMessageBtn");

    // ✅ Debugging: Ensure elements exist
    if (!messageBtn) {
        console.error("❌ Error: Message button not found. Check if 'dashboardMessageBtn' exists in dash.php.");
        return;
    }
    if (!messageSection) {
        console.error("❌ Error: Message section not found.");
        return;
    }

    console.log("✅ Message button and section found!");

    // ✅ Show message box when button is clicked
    messageBtn.addEventListener("click", function () {
        console.log("✅ Message button clicked.");
        messageSection.classList.toggle("d-none"); // Toggle visibility
    });

    // ✅ Close message box when close button is clicked
    if (closeMessageBtn) {
        closeMessageBtn.addEventListener("click", function () {
            console.log("✅ Close button clicked.");
            messageSection.classList.add("d-none"); // Hide the section
        });
    }
});
</script>



</body>
</html>
