function validateForm() {
    var userNameInput = document.getElementById("user_name");
    var passwordInput = document.getElementById("password");

    if (userNameInput.value.trim() === "") {
        alert("Please enter a user name.");
        return false; // Prevent form submission
    }

    // Check if the username starts with a letter
    var firstChar = userNameInput.value.trim().charAt(0);
    if (!firstChar.match(/[a-zA-Z]/)) {
        alert("Username must start with a letter.");
        return false; // Prevent form submission
    }

    if (passwordInput.value.trim() === "") {
        alert("Please enter a password.");
        return false; // Prevent form submission
    }

    return true; // Allow form submission
}

