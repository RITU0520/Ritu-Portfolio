<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.php#contact'); exit; }
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? 'Portfolio contact');
$message = trim($_POST['message'] ?? '');
if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400); echo '<!doctype html><html><body style="font-family:Arial;padding:40px"><h2>Please enter a valid name, email and message.</h2><a href="index.php#contact">Go back</a></body></html>'; exit;
}
$to = 'ritujha0520@gmail.com';
$headers = "From: Portfolio Contact <noreply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ">\r\n" . "Reply-To: {$email}\r\n" . "Content-Type: text/plain; charset=UTF-8\r\n";
$body = "Name: {$name}\nEmail: {$email}\n\n{$message}";
$sent = @mail($to, $subject !== '' ? $subject : 'Portfolio contact', $body, $headers);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
        <title>Message status</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1><?= $sent ? 'Message submitted.' : 'Message could not be sent.' ?></h1>
        <p><?= $sent ? 'Thank you. Your message was handed to the server mail system.' : 'Your hosting provider may not have PHP mail configured. Please email Ritu directly.' ?></p>
        <a href="index.php#contact">Return to portfolio</a>
    </div>
</body>
</html>
