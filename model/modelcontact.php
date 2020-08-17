<?php 

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
