
<?php 

function email($to,$subject,$message,$destinataire){


      $headers = 'From: '.$destinataire."\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);


}

?>

