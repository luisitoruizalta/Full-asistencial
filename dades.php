<?php
$name = $_POST['Unitat']
$name = $_POST['Tecnics']
$name = $_POST['Num. telefon']

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Su e-mail es: " . $mail . "\r\n";

$para = 'luisitoruizalta@gmail.com';
$asunto = 'Full asistencial';

mail($para, $asunto, utf8_decode($message), ($header);

header("Location:index.html");
?>
