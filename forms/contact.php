<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

echo "ok";

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'thonyspart23@gmail.com';                     //SMTP username
  $mail->Password   = 'vuhtookmtsnfqgkg';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 587;   
  $mail->CharSet = 'utf-8';                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  $mail->setFrom( $_POST['email'], 'Mailer');
  $mail->addAddress('thonyspart23@gmail.com');
  $mail->Subject = 'Send from website';
  $mail->Body = $_POST['message'];
  $mail->send();
    echo 'Message has been sent';
} catch (Exception) {
  echo "Message non envoyer : {$mail->ErrorInfo}";
}



  // Replace contact@example.com with your real receiving email address
  /*$receiving_email_address = 'thonyspart23@gmail.com';

  

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = "name";//$_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = "Subject";//$_POST['subject'] ?? "";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'Thony Sparte',
    'password' => 'vuhtookmtsnfqgkg',
    'port' => '587'
  );
  

  $contact->add_message("me" , 'From');//$_POST['name']
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();*/
?>
