<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $cartDetails = $_POST['cartDetails'];

    $to = "jahmailapro@gmail.com"; // Replace with your email address
    $subject = "New Order from $name";
    $message = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Address: $address\n
        Cart Details:\n$cartDetails
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully!";
    } else {
        echo "Failed to send order. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
