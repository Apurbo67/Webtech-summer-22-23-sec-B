function validateEmail()
 {
    const emailInput = document.getElementById('email').value.trim();
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (emailInput === '')
     {
        alert('Email cannot be empty.');
        return false;
    }

    if (!emailPattern.test(emailInput))
     {
        alert('Please enter a valid email address (e.g., anything@example.com).');
        return false;
    }

   
    return true;
}

function showHint() {
    const hintText = document.getElementById('hintText');
    hintText.style.display = 'inline';
}

function hideHint() {
    const hintText = document.getElementById('hintText');
    hintText.style.display = 'none';
}
