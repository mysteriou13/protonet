<html>
<body>
<?php
include_once("hautepage.php");
include_once("./email.php");
?>

<div id = "conteneur2">

<center>

<p>

</p>

<form  method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">

<input type = "text" name  = "email">

<input type = "submit">

<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$email = htmlspecialchars($_POST['email']);

$email = $connect->real_escape_string($_POST['email']);

$e = "SELECT count(*)email FROM membre WHERE email = '$email'";

$e1 = $connect->query($e);

$e2 = $e1->fetch_assoc();

if($e2['email'] == 1){

$destinataire = $email;

$suject = "changer de mot de pass";

$changepass = "http://www.vecchionet.com/changepass.php";
$lienemail = "
vous avez demander un nouveaux mot de pass,pour cela cliquer sur lien ci-dessus
http://www.vecchionet.com/changepass.php?email=$destinataire'";


Email($destinataire,$suject,$lienemail);

}else{

echo "erreur  email no  reconnu ";

}

}
 ?>

</form>


</center>

</div>

<?php 
include_once("footer.php");
?>

</body>
</html>

