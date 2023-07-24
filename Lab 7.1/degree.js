function validateDegree() {
    const degreeInputs = document.getElementsByName('degree');
    let selectedDegree = false;

    for (const degreeInput of degreeInputs) {
        if (degreeInput.checked) {
            selectedDegree = true;
            break;
        }
    }

    if (!selectedDegree) {
        alert('Please select your degree.');
        return false;
    }

    // Validation successful, you can submit the form or do further processing here
    return true;
}
