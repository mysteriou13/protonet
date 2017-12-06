
<?php 

function email($to,$subject,$message,$destinataire,$expediteur){


      $headers = 'From: '.$destinataire."\r\n" .
     'Reply-To: '.$expediteur . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);


}

?>

