
<?php

function inscription($pseudo,$pass,$mysqli,$email,$e){

$errorpseudo = null;
$erropass = null;
$errorformatemail  = null;
$erroremail = null;


$pass = password_hash($pass,PASSWORD_DEFAULT);

$pass = $mysqli->real_escape_string($pass);

$date = date("d").date("m").date("y");

$date = $mysqli->real_escape_string($date);

$length =  rand(10, 50);

$token = bin2hex(random_bytes($length));

$tokenmail = $mysqli->real_escape_string($token);

$verifemail = 0;

$verifemail = $mysqli->real_escape_string($verifemail);

 $moth = date("m")+1; 

 $date = date("d").$moth.date("y");

 $date = $mysqli->real_escape_string($date);

$i = 'INSERT INTO membre VALUES(NULL,"'.$pseudo.'","'.$pass.'","'.$email.'","'.$date.'", "'.$verifemail.'","'.$tokenmail.'")';

$mysqli->query($i);

$mysqli->real_escape_string($i);

$link= "https://vecchionet.com/verifemail.php?email=".$token;

$return = "https://www.vecchionet.com";

$message = "pour confirmé votre inscription  copier  dans votre navigateur web : :".$link;

$e->envoiemail($email,"confirmation inscription",$message,"massanthony@vecchionet.com");

}

?>

