<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $to = "taffythedev@gmail.com";
    $subject = "Women's Network Conference Registration";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $organization = htmlspecialchars($_POST["organization"]);
    $business = htmlspecialchars($_POST["business"]);
    $interest = htmlspecialchars($_POST["interest"]);

    $message = "
    New Registration Submission:

    Name: $name
    Email: $email
    Church / Organization: $organization
    Business / Industry: $business

    Interest:
    $interest
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2 style='text-align:center;'>Thank you! Your submission has been sent successfully.</h2>";
    } else {
        echo "<h2 style='text-align:center;'>Sorry, something went wrong. Please try again.</h2>";
    }
}
?>
