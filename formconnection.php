
<div style = "margin:1%;" >


<form id = "connection" style = "display:block; margin:1%;" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">

<div style = "font-size:2em; display:flex; justify-content:space-around;  flex-wrap:wrap">

<div  style = "background-Color:blue; border: 2px solid white; border-radius: 25px; font-size:1em;  color:white; padding:3%;" >
<label> pseudo </label> <input name = "pseudo" type = "text">
</div>

<div  style = "background-Color:blue; border: 2px solid white; border-radius: 25px; font-size:1em;  color:white; padding:3%;">
<label> mot de pass </label><input name = "pass" type = "password">
</div>

<div>
<input  type = "submit"  style = "background-Color:blue; border: 2px solid white; border-radius: 25px; font-size:1em;  color:white"value = "connection">
</div>

<div style= "padding:1%;  background-Color:blue; border: 2px solid white; border-radius: 25px; "  >

<a style = "color:white;"  href = "oublipass.php"> mot de pass oubli&eacute; </a>
</div>

</div>

</form>


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

$valide = 0;

if($i3['pseudo'] == 1){
if (password_verify($pass, $login2['pass'])) {

session_start();

$_SESSION['pseudo'] = $pseudo;

$valide = 1;

header("Location:index.php");

}
}
 
if($valide == 0){

echo "<center> erreur pseudo ou mot de pass incorrect </center>";

}
}

?>


</div>


