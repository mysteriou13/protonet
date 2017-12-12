<html>

<link rel = "stylesheet" href = "./membre/style/style.css">
<?php 

session_start();

$d= "corsicanet";

include_once("./head.php");
include_once("email.php");
?>

<body>

<?php 
include_once("./header.php");

$valide1 = 0;

$valide2 = 0;

$valide3 = 0;

$vide1 = 0;

$vide2 = 0;

$c =  mysqli_connect("localhost","root","","corsicanet");

if ($c->connect_errno){

echo "erro connect";

}

?>

<div id = "contact">
<?php 

include("./forminscription.php");

?>
</div>

<?php
include_once("./footer.php");

?>

</body>

</html>

