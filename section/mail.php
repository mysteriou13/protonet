<?php


class email{

function envoiemail($emailto,$sujet,$message,$emailfrom){

   $to      = $emailto;
     $message =  $message;
     $headers = 'From:  '.$emailfrom. "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $sujet, $message, $headers);

}
}
?>
