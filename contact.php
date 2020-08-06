<html>
<body>
<?php
include("head.php");
include("header.php");


?>

</br>


<div class ="b3"  style ="padding:1%;">
<center>


<div id = "b6">

formulaire contact

</div>
</br>

<div>
<form action = "<?php $_SERVER['PHP_SELF']?>" method = "POST">

<div id = "b6"> 
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

</br>

<div  id ="b6">

*titre <input type = "text" name = "titre">

<?php 
if(isset($_POST['titre'])  && empty($_POST['titre'])){

echo "champs vide";

}

?>
</div>

</br>

<div id ="b6">

message 
</br>

<textarea id ="message" name = "message" >

</textarea>

</br>
</br>

<?php 

if(isset($_POST['message']) && empty($_POST['message'])){

echo "champs vide";

}

?>

</div>

<div>
</br>

<button  id = "envoyer"  type = "submit"  value  = "envoyer">
envoyer

</button>

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

 <script>

var message = document.getElementById("message");

message.style.height ="20%";

message.style.width ="90%";


 </script>


