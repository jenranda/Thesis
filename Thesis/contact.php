<?php include 'navbar.php'; ?>
<?php include 'dash.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Contacts</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Contacts Button (Make sure this button exists in your UI) -->
<button id="showContactsBtn" class="btn btn-primary">Show Contacts</button>

<!-- Contacts Section -->
<div id="contacts-section" class="container mt-5 text-center d-none">
    <h1 class="my-4">Emergency Contacts</h1>
    
    <div class="card shadow-sm mx-auto" style="max-width: 400px;">
        <div class="card-body">
            <h5 class="card-title">MDRRMO Officials</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Juan Dela Cruz</strong> - MDRRMO Head - 📞 0912-345-6789</li>
                <li class="list-group-item"><strong>Maria Santos</strong> - Emergency Coordinator - 📞 0923-456-7890</li>
                <li class="list-group-item"><strong>Carlos Reyes</strong> - Field Responder - 📞 0934-567-8901</li>
                <li class="list-group-item"><strong>Fire Department</strong> - 📞 (063) 222-3333</li>
                <li class="list-group-item"><strong>Police Station</strong> - 📞 (063) 444-5555</li>
                <li class="list-group-item"><strong>Municipal Health Office</strong> - 📞 (063) 666-7777</li>
            </ul>

            <!-- Close Button -->
            <button id="closeContactsBtn" class="btn btn-danger mt-3">Close</button>
        </div>
    </div>
</div>

<!-- Fix JavaScript for Contacts Section -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let contactsButton = document.getElementById("showContactsBtn"); // Button to show contacts
        let contactsSection = document.getElementById("contacts-section"); // Contacts section
        let closeContactsBtn = document.getElementById("closeContactsBtn"); // Button to close contacts

        if (contactsButton) {
            contactsButton.addEventListener("click", function () {
                contactsSection.classList.toggle("d-none"); // Toggle visibility
            });
        }

        if (closeContactsBtn) {
            closeContactsBtn.addEventListener("click", function () {
                contactsSection.classList.add("d-none"); // Hide when closing
            });
        }
    });
</script>

</body>
</html>
