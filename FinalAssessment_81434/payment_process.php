<?php
// Retrieve payment details from the request
$name = $_GET['name'];
$email = $_GET['email'];
$cardNumber = $_GET['cardNumber'];
$expiry = $_GET['expiry'];
$cvv = $_GET['cvv'];

// Process the payment
$paymentSuccess = processPayment($name, $email, $cardNumber, $expiry, $cvv);

// Check if the payment was successful
if ($paymentSuccess) {
  echo "Payment successful! Thank you for your purchase.";
} else {
  echo "Payment failed. Please try again.";
}

// Function to process the payment (you should implement your own payment processing logic here)
function processPayment($name, $email, $cardNumber, $expiry, $cvv) {
  // Perform necessary actions to process the payment (e.g., communicate with a payment gateway or perform database operations)

  // Return the payment status (true for successful, false for failed)
  return true; // Simulated successful payment
}
?>
