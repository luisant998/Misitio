<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php

$email_to = "luisant998@gmail.com";

$name = $_POST["name"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$url = $_POST["url"];

$message = $_POST["message"];

$text = "NAME: $name<br>

         EMAIL: $email<br>

		 URL: $url<br>		 

         MESSAGE: $message";

$headers = "MIME-Version: 1.0" . "\r\n"; 

$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 

$headers .= "From: <$email>" . "\r\n";

mail($email_to, "Message", $text, $headers);

?>
</body>

</html>