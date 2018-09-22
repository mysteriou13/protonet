<html>
<body>

<?php

include_once("./install/connect.php");

include_once("head.php");

include_once("header.php");

?>


<center>

<div id = "b" style = "margin-top:0.5em; font-size:2em">
changer de mot de pass


<form action ="<?php $_SERVER['PHP_SELF']?>" method = "POST">

<p id = "b"> email <input name = "email" type = "text"> </p>

<input  type ="submit"   value = "envoyer">

</form>

<?php 

$domain = $_SERVER['SERVER_NAME'];

if(isset($_POST['email']) && !empty($_POST['email'])){ 

$email = $mysqli->real_escape_string($_POST['email']);

$email1 = "SELECT COUNT(*)email FROM  membre WHERE email ='$email'";

$email2 = $mysqli->query($email1);

$email3 = $email2->fetch_assoc();


 $token = "SELECT * FROM membre WHERE email = '$email' ";

 $token1 = $mysqli->query($token);

 $token2 = $token1->fetch_assoc();

 $tokenemail = $token2['email'];

 $link = "?token=".$token2['tokenemail']."&return=".$domain."&email=".$email;

 $message = " pour changer votre votre mot pass sur vecchionet.com  copier ce lien dans un naviagateur web  :https://vecchionet.com/changepass.php".$link;

$e->envoiemail($email,"changement de mot de pass",$message,"massanthony@vecchionet.com");


if($email3['email'] == 1){

header($location);

}

}

?>


</div>
</center>

</body>
</html>
