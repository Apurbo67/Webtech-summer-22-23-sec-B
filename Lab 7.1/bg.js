function toggleOptions() {
    const optionsDiv = document.getElementById('options');
    if (optionsDiv.style.display === 'none') {
        optionsDiv.style.display = 'block';
    } else {
        optionsDiv.style.display = 'none';
    }
}

function validateBloodGroup() {
    const bloodGroupInputs = document.getElementsByName('bloodGroup');
    let selectedBloodGroup = false;

    for (const bloodGroupInput of bloodGroupInputs) {
        if (bloodGroupInput.checked) {
            selectedBloodGroup = true;
            break;
        }
    }

    if (!selectedBloodGroup) {
        alert('Please select your blood group.');
        return false;
    }

    // Validation successful, you can submit the form or do further processing here
    return true;
}
