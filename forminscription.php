<?php

$valide1 = 0;

$valide2 = 0;

$valide3 = 0;

$vide1 = 0;

$vide2 = 0;

$valide1 = 0;

$valide2 = 0;

$valide3 = 0;

$vide1 = 0;

$vide2 = 0;


?>


<div id = "inscription"
style = "
color:white;
font-size:1em;
";
>
<center>
Inscription
</center>
</div>

<div id = "v"style = "background-color:rgb(63,51,51); color:white;" onclick = "document.location= 'index.php'">

</div>

<div
id = "valide";
style = "
background-color:rgb(63,51,51);
"
>


<p style = "
padding-top:1%;
">

<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']."#inscription"?>">

<p
style = "
text-align:center;
color:white;
margin-bottom:1%;
 ";
>


pseudo<input type = "text"   name = "pseudo"

value = "
<?php 

if(isset($_POST['pseudo'])&& !empty($_POST['pseudo']) ){

echo $_POST['pseudo'];

}

?>
";

 style = "width:100%;">
</p>

<style>
<?php 

if(isset($_POST['pseudo']) && empty($_POST['pseudo'])){

echo "
#error{

display:block;

}
";
}


if(isset($_POST['pass']) && empty($_POST['pass'])){

echo "
#error1{

display:block;

}
";
}

if(isset($_POST['email']) && empty($_POST['email'])){

echo "
#error2{

display:block;

}
";

}

?>

</style>

<?php 


if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){


$v = htmlspecialchars(($_POST['pseudo']));

$v = $connect->real_escape_string($v);

$sql1 = $connect->query("SELECT count(*)pseudo FROM membre  WHERE pseudo = '$v' ");

$sql2 = $sql1->fetch_row();

if($sql2[0] == 1){

echo "
<center style ='color:red;'>
pseudo pris
</center>
";

}

if($sql2[0] == 0){


$vide1  = $vide1+1;

}

}


?>

<div id = "error">
<center>
error pseudo vide
</center>
</div>

</br>

<p style = "
text-align:center;
color:white;
">
pass
<input type = "password" name = "pass" style = " width:100%;">
</p>


<div id = "error1">
<center>
error pass vide
</center>
</div>


</br>

<p
style = " text-align:center; color:white; "
>
email <input type = "text" name = "email" 
value = "
<?php

if(isset($_POST['email'])&& !empty($_POST['email'])){

echo $_POST['email'];

}

 ?>
";
style = "width:100%;" >
</p>


<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$v = htmlspecialchars($_POST['email']);

$v =$connect->real_escape_string($_POST['email']);

$sql1 = $connect->query("SELECT count(*)email FROM membre  WHERE email = '$v'");

$sql2 = $sql1->fetch_row();


if($sql2[0] == 1){
echo "
<center style ='color:red;'>
email pris
</center>
";

}

if($sql2[0] == 0){

$vide2 = 1;

}

}

?>


<div id = "error2">
<center>
error email valide
</center>
</div>

<div
style = "color:red"
>
<center>
<?php 

if(isset($_POST['email'])&& !empty($_POST['email'])){
$email = $_POST['email'];

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo("format email no valide");
}

}

?>
</center>

</div>

</br>
<?php

if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){

$valide1 = 1;

}

if(isset($_POST['pass']) && !empty($_POST['pass'])){

$valide2 = 1;

}

if(isset($_POST['email']) && !empty($_POST['email'])){
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

$valide3 = 1;

}
}



 $total = $valide1+$valide2+$valide3+$vide1+$vide2;

if($total == 5){

echo "<center>valide</center>";

}

 ?>

<input type = "hidden" name = "boot">

<center>

<?php 

if($total == 5){
if(isset($_POST['boot']) && empty($_POST['boot'])){

$pseudo = htmlspecialchars($_POST['pseudo']);

$pseudo = $connect->real_escape_string($pseudo);

$pass = htmlspecialchars(sha1($_POST['pass']));

$pass = $connect->real_escape_string($pass);

$email = htmlspecialchars($_POST['email']);

$email = $connect->real_escape_string($email);

$zero = 0;

$verfifemail =$connect->real_escape_string($zero);

$connect->query("INSERT INTO membre VALUES ('','$pseudo','$pass','$email',$zero,$zero)");

$selemail = "SELECT email FROM membre WHERE email  = '$email'";

$queryemail = $connect->query($selemail);

$row = $queryemail->fetch_assoc();

$destinataire = $row['email'];

$subject =  "validatation";

print_r($lienemail);


 
$emailvalide1 = '<a href = "http://www.vecchionet.com/emailvalide.php?email=$destinataire">confimer votre email</a>';



Email($destinataire,$subject,$emailvalide1);
echo "
<style>
".
"
#valide{

display:none;

}
"
."</style>";

$c = "inscription reussi  cliquer pour retourner vers accueil ";


echo "<script>".
"document.getElementById('v').innerHTML= '<center> ".$c."</center>"."'".";

"."</script>";



}
}

?>


<input type = "submit" style = "color:black">

</form>

</p>


</div>


