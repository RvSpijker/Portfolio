<?php
$msg = $_POST['msg'];
$name = $_POST['name'];
$email = $_POST['email'];

$to = "rvspijker@rvspijker.nl";
$subject = "Contact Form";

$message = "
<html>
<head>
    <title>HTML email</title>
</head>

<body>
    <p>$msg</p>
    <br>
    <p>naam: $name</p>
    <br>
    <p>email: $email</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <$email>" . "\r\n";

mail($to,$subject,$message,$headers);

header('location: ../../contact.php');
exit();