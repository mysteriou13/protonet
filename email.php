
<?php 

function email($to,$subject,$message,$expediteur){


      $headers = 'From: '.$expediteur."\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);


}

?>

