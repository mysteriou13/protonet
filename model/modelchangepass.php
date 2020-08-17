<?php
if(isset($_POST['newpass']) && !empty($_POST['newpass']) && isset($_POST['confirpass']) && !empty($_POST['confirpass'] )){

$new = htmlspecialchars($_POST['newpass']);

$new = $mysqli->real_escape_string($new);

$confir = htmlspecialchars($_POST['confirpass']);

$confir = $mysqli->real_escape_string($confir);

$token = htmlspecialchars($_GET['token']);

$token = $mysqli->real_escape_string($token);

if($new == $confir){

$pass = password_hash($confir,PASSWORD_DEFAULT);

if($new == $confir){

$u = "UPDATE membre set pass = '$pass' WHERE tokenemail = '$token'";

 $mysqli->query($u);

echo "mot de pass changer";

}


}else{

echo "erreur  les deux mot de pass ne sont pas indentique";

}

}

?>

