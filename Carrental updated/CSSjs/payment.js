// payment.js

document.addEventListener("DOMContentLoaded", function () {
    var paymentForm = document.getElementById("paymentForm");
    var accountNumberBox = document.getElementById("accountNumberBox");
    var accountNumberInput = document.getElementById("accountNumber");
    var payButton = document.getElementById("payButton");
    var paymentStatus = document.getElementById("paymentStatus");

    paymentForm.addEventListener("change", function () {
        var paymentOption = document.querySelector('input[name="payment_option"]:checked').value;
        if (paymentOption === "bank" || paymentOption === "mobile_banking") {
            accountNumberBox.style.display = "block";
        } else {
            accountNumberBox.style.display = "none";
        }
    });

    payButton.addEventListener("click", function () {
        var paymentOption = document.querySelector('input[name="payment_option"]:checked').value;
        var accountNumber = "";

        if (paymentOption === "bank" || paymentOption === "mobile_banking") {
            accountNumber = accountNumberInput.value.trim();
            if (accountNumber === "") {
                alert("Account number cannot be empty.");
                return;
            }
        }

      
        paymentStatus.innerText = "Payment successful! Account Number: " + accountNumber;
        paymentStatus.style.display = "block";
    });
});
