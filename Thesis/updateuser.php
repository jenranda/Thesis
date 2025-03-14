<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>


<?php include 'navbar.php'; ?>
<?php include 'dash.php'; ?>



<!-- Form for Updating User Information -->
<div class="container">
    <h2 class="text-center">Update User Information</h2>
    <form id="updateUserForm">
        <div class="mb-3">
            <label for="userId" class="form-label">User ID:</label>
            <input type="text" id="userId" class="form-control" placeholder="User ID" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input type="text" id="name" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New Password:</label>
            <input type="password" id="password" class="form-control" placeholder="New Password" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-success w-100">Update</button>
    </form>
    <p id="message" class="text-success mt-3 d-none">User details updated successfully!</p>
    <p id="errorMessage" class="text-danger mt-3 d-none">All fields are required!</p>
</div>

<script>
    document.getElementById("updateUserForm").addEventListener("submit", function(event) {
        event.preventDefault();
        let userId = document.getElementById("userId").value.trim();
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let password = document.getElementById("password").value.trim();
        
        let message = document.getElementById("message");
        let errorMessage = document.getElementById("errorMessage");

        if (userId === "" || name === "" || email === "" || password === "") {
            errorMessage.classList.remove("d-none");
            message.classList.add("d-none");
        } else {
            message.classList.remove("d-none");
            errorMessage.classList.add("d-none");
        }
    });
</script>

<?php include 'footer.php'; ?>
