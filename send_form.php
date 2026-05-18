<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "toomas-kaarel.elmet@voco.ee";
    $headers = "From: " . $email;

    mail($to, $subject, $message, $headers);
    header("Location: index.html#contact");
    exit();
}
?>