<div id = "inscription"
style = "
color:white;
font-size:1em;
background-color:silver;
";
>
<center>
Inscription
</center>
</div>

<div id = "v"
style = "background-color:white";
>

</div>

<div
id = "valide";
style = "
background-color:white;
"
>


<p style = "
padding-top:1%;
">

<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']."#inscription"?>">

<p
style = "
margin-left:20%;
margin-bottom:1%;
 ";
>


pseudo<input type = "text" name = "pseudo"

value = "
<?php 

if(isset($_POST['pseudo'])&& !empty($_POST['pseudo']) ){

echo $_POST['pseudo'];

}

?>
";

 style = "width:70%;">
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


$v = $_POST['pseudo'];

$sql1 = mysqli_query($c,"SELECT count(*)pseudo FROM membre  WHERE pseudo = '$v' ");

$sql2 = mysqli_fetch_row($sql1);

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
margin-left:20%;
">
pass<input type = "password" name = "pass" style = " width:70%;">
</p>


<div id = "error1">
<center>
error pass vide
</center>
</div>


</br>

<p
style = "margin-left:20%;"
>
email <input type = "text" name = "email" 
value = "
<?php

if(isset($_POST['email'])&& !empty($_POST['email'])){

echo $_POST['email'];

}

 ?>
";
style = "width:70%;" >
</p>


<?php

if(isset($_POST['email']) && !empty($_POST['email'])){


$v = $_POST['email'];

$sql1 = mysqli_query($c,"SELECT count(*)email FROM membre  WHERE email = '$v' ");

$sql2 = mysqli_fetch_row($sql1);


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

$pseudo = $_POST['pseudo'];

$pass = sha1($_POST['pass']);

$email = $_POST['email'];

mysqli_query($c,"INSERT INTO membre VALUES ('','$pseudo','$pass','$email',0)");

echo "
<style>
".
"
#valide{

display:none;

}
"
."</style>";

$c = " inscription reussi retourner vers accueil ";

echo "<script>".
"document.getElementById('v').innerHTML= '<center> "."<a href = index.php> ".$c."</a>"."</center>"."'"."
document.getElementById('v').style.paddingBottom= '20%';
"."</script>";



}
}

?>


<input type = "submit" style = "color:black">

</form>

</p>


</div>


