
<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
{

$to_id = 'abc@gmail.com';

$subject =  'mail check';

$message = 'message';


$mail = new PHPMailer(true);


$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;


$mail->Username = 'abc@gmail.com';

$mail->Password = 'mobno';

$mail->SMTPSecure = 'tls';  

$mail->Port = 587;


$mail->setFrom('abc@gmail.com', 'Anand');

$mail->addAddress($to_id);

$mail->Subject = $subject;

$mail->Body = $message;


if(!$mail->send())

{

$error = "Mailer Error: " .$mail->ErrorInfo;

echo "<div class=display> '.$error.'  </div>";

}

else
{

echo " <div class=display> Message Sent </div>";

}


}


?>
