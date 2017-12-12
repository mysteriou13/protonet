<?php
session_start();
 ?>
<html>
<body>
<?php 

$d = "mes produits -protonet";

include_once("./hautepage.php");

$login = $connect->real_escape_string($_SESSION['pseudo']);

$produit = "SELECT count(*)pseudo FROM commande WHERE pseudo = '$login' ";

$selectproduit1 = $connect->query($produit);

$selectproduit2 =$selectproduit1->fetch_assoc();


?>
</br>

<div style = "color:white; font-size:1em;">

<div id = "contact">

<div id = "commander1">

<div style = "font-size:2em;">

<a href = "produit.php" style = "color:white;"> mes produit </a>

</div>


</div>

</div>

</br>

<?php 

include_once("./footer.php");

?>

</body>

</html>

