
<?php 

function Email($destinataire, $subject, $message){

      $headers = 'From: vercchionet'."\r\n" .
     'Reply-To: vecchionet' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($destinataire, $subject, $message,$headers);
    

}

?>

