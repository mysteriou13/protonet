<html>
<body>
<?php
include("head.php");
include("header.php");

$t = $_GET['email'];

$t = htmlspecialchars($t);

$t = $mysqli->real_escape_string($t);

$token = "SELECT COUNT(*)pseudo  FROM membre  WHERE tokenemail  = '$t'";

$token1 = $mysqli->query($token);

$token2 = $token1->fetch_assoc();

$verif = '1';

$verif = $mysqli->real_escape_string($verif);

$update = "UPDATE membre SET verifemail = '$verif' WHERE tokenemail = '$t'";

if($token2['pseudo'] == 1){

$mysqli->query($update);

}

echo "email verifi&eacute; retour a l'index  dans 5 seconde";

$a = 0;

$a1 = 5;


$location = "Location:index.php";

 sleep(5);

header($location);


?>

<div id  = "b" style = "font-size:2em">

<center>

email verifi&eacute; retour a l'accueil dans quelque secondes.
</center>

</div>

</body>
</html>
 
