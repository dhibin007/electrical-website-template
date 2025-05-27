<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@eurotechgulf.com";
    $subject = "New Contact Form Submission from Eurotech Website";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $project = htmlspecialchars($_POST["project"]);
    $subjectInput = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Project: $project\n";
    $body .= "Subject: $subjectInput\n\n";
    $body .= "Message:\n$message";

    $headers = "From: Eurotech Website <noreply@eurotechgulf.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.history.back();</script>";
    }
}
?>
