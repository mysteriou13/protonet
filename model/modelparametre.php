<?php

$email = $_SERVER['PHP_SELF']."?email=1";

$e = new email();

if(empty($_SESSION['pseudo'])){

header("Location:index.php");

}


$select = "SELECT * FROM membre WHERE pseudo = '$pseudo'";

$select1 = $mysqli->query($select);

$select2 = $select1->fetch_assoc();


$next = "SELECT COUNT(*)pseudo FROM nextcloud WHERE pseudo = '$pseudo'";

$next1 = $mysqli->query($next);

$next2 = $next1->fetch_assoc();

$cloud = "SELECT * FROM nextcloud WHERE pseudo = '$pseudo'";

$cloud1 = $mysqli->query($cloud); 

$cloud2 = $cloud1-> fetch_assoc();


$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

$pseudo1 = "SELECT *  FROM nextcloud WHERE createur = '$pseudo'";

$pseudo2 = $mysqli->query($pseudo1);



?>

