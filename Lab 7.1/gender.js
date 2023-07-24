function validateGender() {
    const genderInputs = document.getElementsByName('gender');
    let selectedGender = false;

    for (const genderInput of genderInputs) {
        if (genderInput.checked) {
            selectedGender = true;
            break;
        }
    }

    if (!selectedGender) {
        alert('Please select your gender.');
        return false;
    }

    // Validation successful, you can submit the form or do further processing here
    return true;
}
