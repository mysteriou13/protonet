
<?php

class email($smtp,$emailfrom,$des,$nomdes,$fromname,$message,$object){

function envoimail(){

    use PHPMailer\PHPMailer\PHPMailer;
require './vendor/autoload.php';
 
$mail = new PHPMailer()
$mail->Host = $smtp;
$mail->SMTPAuth   = false;
$mail->Port = 25; // Par défaut
 
// Expéditeur
$mail->SetFrom($emailfrom, $fromname);
// Destinataire
$mail->AddAddress($des,  $nomdes);
// Objet
$mail->Subject = $object;
 
// Votre message
$mail->MsgHTML($message);
 
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  echo 'Erreur : ' . $mail->ErrorInfo;
} else {
  echo 'Message envoyé !';
} 
}

}
?>
