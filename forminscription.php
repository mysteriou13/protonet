
<div id = "b">
<div id = "login">
<center>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
connection
</br>
pseudo <input name = "pseudo" type = "text">
password <input name = "pass" type = "password">
<input type = "submit" value = "connection">
 <a id = "b" href = "inscription.php">inscription</a>
</br>

<a id= "b" href = "oublipass.php"> mot de pass oubli&eacute; </a>

</form>
</center>

<?php

if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && 
    isset($_POST['pass']) && !empty($_POST['pass']) ){

 $pseudo = $mysqli->real_escape_string($_POST['pseudo']);

 $pass = $mysqli->real_escape_string($_POST['pass']);

 $i = "SELECT COUNT(*)pseudo FROM membre WHERE pseudo = '$pseudo'";

$i2  = $mysqli->query($i);

$i3 = $i2->fetch_assoc();

 $login = "SELECT pass FROM membre WHERE pseudo = '$pseudo'";

$login1 = $mysqli->query($login);

$login2 = $login1->fetch_assoc();

 

if($i3['pseudo'] == 1){
if (password_verify($pass, $login2['pass'])) {

session_start();

 $_SESSION['pseudo'] = $pseudo;

header("Location:index.php");

}
} 

}

?>
</div>
</div>
