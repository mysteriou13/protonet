
<?php 

function Email($destinataire, $subject, $message){

      $headers = 'From: vercchionet'."\r\n" .
     'Reply-To: vecchionet' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();


     mail('elio007@hotmail.fr', 'Mon Sujet', $message,$headers);
    

}

?>

