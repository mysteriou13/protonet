<?php 
session_start();
?>
<html>
<body>
<?php 
include_once("hautepage.php");
?>

<div id = "conteneur2">

<div style = "color:white; font-size:2em;">

<center>
mes commandes
</center>

<?php

$pseudo = $_SESSION['pseudo'];

$pseudo1 =  $connect->real_escape_string("$pseudo");


$produit = "SELECT * FROM commande WHERE pseudo = '$pseudo1'";

$produit1 = $connect->query($produit);


$d = 0;



while($produit2 = $produit1->fetch_assoc()){

$d++;

include("./divproduit.php");

}


?>


</div>
</div>


<?php 
include_once("footer.php");
?>
</body>
</html>
