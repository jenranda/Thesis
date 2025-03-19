
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
    
    <?php include 'footer.php'; ?>


<form action="save_message.php" method="POST">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="sender_name" class="form-control" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>

    <button type="submit" class="btn btn-primary mt-2">Send Message</button>
</form>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById("sendMessageBtn").addEventListener("click", function() {
    let message = document.getElementById("messageInput").value.trim();
    if (message === "") {
        alert("Please enter a message before sending.");
        return;
    }
    alert("Message Sent: " + message);
    document.getElementById("messageInput").value = ""; // Clear input after sending
});
</script>

</body>
</html>
