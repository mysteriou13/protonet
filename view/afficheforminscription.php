<table >

<caption id = "b3">
inscription
</caption>

<form action = "<?php $_SERVER['PHP_SELF']?>" method  ="POST">

<tr>

<td id ="td"> <center>pseudo  <input type  ="text"  name = "pseudo">

<?php

if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){

$pseudo = $mysqli->real_escape_string($_POST['pseudo']);

$pseudo1 = "SELECT COUNT(*)pseudo FROM membre WHERE pseudo = '$pseudo'";

$pseudo2 = $mysqli->query($pseudo1);

$pseudo4 = $pseudo2->fetch_assoc();

 if($pseudo4['pseudo'] == 0){
 $validepseudo = 1;
 $errorpseudo = 0;
}else{

$errorpseudo = 1;

echo "pseudo pris";

}



}
   ?>
</center> </td>

</tr>


<tr> <td id = "td"> <center> mot de pass <input type = "password" name  = "pass">
<?php
if(isset($_POST['pass']) && !empty($_POST['pass'])){

$pass1 = strlen($_POST['pass']);

if($pass1 >= 8){

$pass =  $_POST['pass'];

$validepass = 1;

}else{

$validepass = 0;

 echo "mot de pass tros court";

}

}

?>
</center> </td> </tr>

<tr>  <td id = "td"> <center> email <input type  = "text" name  = "email">

<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$email = $mysqli->real_escape_string($_POST['email']);

$email1 = "SELECT COUNT(*)email FROM membre WHERE email ='$email'";

$email2 = $mysqli->query($email1);

$email3 = $email2->fetch_assoc();


if(filter_var($email, FILTER_VALIDATE_EMAIL)){

$errorformatemail = 1;

}else{

  $errorformatemail = 0;

}

if($email3['email'] == 0){

$valideemail  = 1;

$erroremail  = 0;

}else{
   $erroremail = 1;

}

}


 ?>
</center> </td> </tr>

<tr>
<td id ="td">
<center>
 accepter  les <a  href = "./CGU.php" target="_blank"> CGU </a> <input  name = "CGU"  type = "checkbox"></center>

<?php 

if(isset($_POST['val'])  && isset($_POST['CGU']) && $_POST['CGU'] !== "on" ){

echo "vous devez accepter les CGU";

}

?>
</td>
</tr>

<tr>
<td id= "td">

<center> <button type = "submit" name = "val" value = "valider">valider</button></center>
</td>
</tr>
</form>


