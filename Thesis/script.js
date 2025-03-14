// Show/Hide Contact Information
document.getElementById("showContactsBtn").addEventListener("click", function () {
    let contactsSection = document.getElementById("contacts-section");
    contactsSection.style.display = contactsSection.style.display === "none" || contactsSection.style.display === ""
        ? "block"
        : "none";
});

// Send Message
function sendMessage() {
    let message = document.getElementById("messageInput").value;
    if (message.trim() === "") {
        alert("Please enter a message.");
    } else {
        alert("Message sent: " + message);
        document.getElementById("messageInput").value = "";
    }
}

// Close Message Box
function closeMessageBox() {
    document.querySelector(".message-box").style.display = "none";
}
