<html>
<body>
<?php
include("head.php");
include("header.php");


?>

<div id = "b3" style = "display:<?php echo $dismobile?>">

<center>
<a id = "contact" href = "contact.php"> haute de page </a>
</center>

</div>

<div id = "b3">

<center>

<div>
contact
</div>

<div>
<form action = "<?php $_SERVER['PHP_SELF']?>" method = "POST">

<div> 
*email <input type = "text" name = "email">
<?php 
if(isset($_POST['email']) && empty($_POST['email'])){

echo "champs vide";

}

if(isset($_POST['email']) && !empty($_POST['email'])){
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

echo "email invalide";

}
}

?>

</div>

<div>
*titre <input type = "text" name = "titre">
<?php 
if(isset($_POST['titre'])  && empty($_POST['titre'])){

echo "champs vide";

}

?>
</div>

<div>

message <textarea name = "message" style = "height:20%; width:90%;">

</textarea>

<?php 

if(isset($_POST['message']) && empty($_POST['message'])){

echo "champs vide";

}

?>

</div>

<div>
<input type = "submit"  value  = "envoyer">
</div>

<?php 
   mail('elio007@hotmail.com', 'Mon Sujet', "test");

if(isset($_POST['email']) && !empty($_POST['email'])){
if(isset($_POST['message']) && !empty($_POST['message'])){
if(isset($_POST['titre']) && !empty($_POST['titre'])){
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

$email = $_POST['email'];

$titre = $_POST['titre'];

$message = $_POST['message'];


$e->envoiemail("elio007@hotmail.fr",$titre,$message,$email);

}
}
}
}

?>

</form>
</div>

</center>

</div>

</body>
</html>
