<?php
require_once 'swiftm/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('robixon2015')
  ->setPassword('zubiri2015');

$mailer = Swift_Mailer::newInstance($transport);

$content=
$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('robixon2015@gmail.com' => 'ABC'))
  ->setTo(array('binosonic@gmail.com'))
  ->setBody('This is a test mail.');
  setcookie("msg","Tu mensaje ha sido enviado!",time()+6,"/");
header("location:../contactos.php");
$result = $mailer->send($message);


?>