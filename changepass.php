
<html>
<body>

<?php 

include_once("./hautepage.php");

?>

<div id = "conteneur2">

<form  method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>" style = "color:white; font-size:2em">
<center>
<label> changement de mot pass</label>
</br>
</br>
<label>nouveau mot pass </label> <input type = "password" name = "Pass">
</br>
<label> confirmer mot de pass</label><input type = "password" name = "confirpass">
</br>
<input type = "submit">
</br>
<?php 


if(isset($_POST['Pass']) && !empty($_POST['Pass'])){
if(isset($_POST['confirpass']) && !empty($_POST['confirpass'])){
if($_POST['confirpass'] != $_POST['Pass']){

echo " les champs ne sont pas indentique ";


}
}
}

?>
<?php

if(isset($_POST)){
if(isset($_POST['Pass']) && !empty($_POST['Pass'])){
if(isset($_POST['confirpass']) && !empty($_POST['confirpass'])){
if(isset($_GET['email']) && !empty($_GET['email'])){
if($_POST['confirpass'] != $_POST['Pass']){


$email = $_GET['email'];

$email = htmlspecialchars($email);

$email = $connect->real_escape_string($email);

$pass = $_POST['Pass'];

$pass = htmlspecialchars($pass);

$pass =  sha1($pass);

$pass  = $connect->real_escape_string($pass);

$update = "UPDATE membre  SET pass = '$pass' WHERE email = '$email'";

$connect->query($update);

echo "votre  nouveau mot de pass est enregistr&eacute;";

}
}
}
}
}


?>
</center>

</form>

</div>

<?php 

include_once("./footer.php");

?>

</body>
</html>

