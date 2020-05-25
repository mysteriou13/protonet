<td  id ="changepass">

<center>
 changer de mot pass
</center>

<form action = "<?php $_SERVER['PHP_SELF']?>" method  = "POST">

nouveau  mot de pass<input type  = "password" name = "newpass">
</br>

confirm mot de pass<input type = "password" name = "confirpass">


<input type = "submit" value = "envoyer">

</form>

</td>

<?php 

if(isset($_POST['newpass']) && !empty($_POST['newpass']) && isset($_POST['confirpass']) && !empty($_POST['confirpass'] )){

$new = htmlspecialchars($_POST['newpass']);

$new = $mysqli->real_escape_string($new);

$confir = htmlspecialchars($_POST['confirpass']);

$confir = $mysqli->real_escape_string($confir);

$token = htmlspecialchars($_GET['token']);

$token = $mysqli->real_escape_string($token);

if($new == $confir){

$tokenemail = "SELECT COUNT(*)tokenemail FROM membre WHERE tokenemail = '$token'";

$tokenemail1 = $mysqli->real_escape_string($tokenemail);

$tokenemail2 = $tokenemail1->fetch_assoc();

$pass = password_hash($confir,PASSSWORD_DEFAULT);

if($new == $confir){

$u = "UPDATE membre set pass = '$pass' WHERE tokenemail = '$token'";

 $mysqli->query($u);

}


}else{

echo "erreur  les deux mot de pass ne sont pas indentique";

}

}

?>

