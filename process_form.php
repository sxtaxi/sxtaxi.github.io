<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $passengers = $_POST["passengers"];
    $email = $_POST["email"];
    $booking_details = $_POST["booking_details"];

    $to = "your@email.com"; // Change this to your email address
    $subject = "New Booking Inquiry from $name";
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Passengers: $passengers\n";
    $message .= "Email: $email\n";
    $message .= "Booking Details:\n$booking_details";

    mail($to, $subject, $message);

    // Optionally, you can redirect the user to a thank you page.
    header("Location: thank_you.html");
    exit;
}
?>
