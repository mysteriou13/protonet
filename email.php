
<?php 

function email($to){


     $to  = 'elio007@hotmail.fr';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: vecchionnet.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);



}

?>

