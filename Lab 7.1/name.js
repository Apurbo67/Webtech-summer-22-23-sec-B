function validateName() {
    const nameInput = document.getElementById('name').value.trim();
    const namePattern = /^[A-Za-z][A-Za-z .-]+$/;

    if (nameInput === '') 
    {
        alert('Name cannot be empty.');
        return false;
    }

    if (nameInput.split(' ').length < 2) {

        alert('Name must contain at least two words.');
        return false;
    }

    if (!namePattern.test(nameInput)) 
    {
        alert('Name can only contain letters (a-z or A-Z), dots (.), or dashes (-), and must start with a letter.');
        return false;
    }

    return true;
}