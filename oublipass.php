
<html>
<body>

<?php
include("./header.php");
include("./head.php");

$mail = new email();


?>


<div id ="b4">

<center>
réinitialiser mot de pass
<center>

</div>


<div id = "b4">

<center>

<form action = "<?php $_SERVER['PHP_SELF']?>" method = "POST">

<div>
adress mail  <input type = "text" name = "email">

<input type = "submit" value = "valider">

</div>

</form>

<?php 


if(isset($_POST['email']) && !empty($_POST['email'])){

$email =  $mysqli->real_escape_string($_POST['email']);

$sql = 'SELECT COUNT(*)email FROM  membre WHERE email = "'.$email.'"';

$sql1 = $mysqli->query($sql);

$sql2 = $sql1->fetch_assoc();

$token = 'SELECT * FROM membre WHERE email = "'.$email.'"';

$token1 = $mysqli->query($token);

$token2 = $token1->fetch_assoc();

$token3 = $token2['tokenemail'];

$link = "https://vecchionet.com/newpass.php?token=$token3";

$message = "pour changer de mot de pass cliquer sur ce lien ".$link;

if($sql2['email'] == 1){

$mail->envoiemail($email,"changement de mot pass",$message, "mrmassaanthony@gmail.com");
}

}

?>

</center>

</div>

</body>
</html>
