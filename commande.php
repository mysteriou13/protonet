<html>
<body>
<?php 
session_start();

$d = "mes produits -protonet";

include_once("./head.php");
include_once("./header.php");

$login = $connect->real_escape_string($_SESSION['pseudo']);

$produit = "SELECT count(*)pseudo FROM commande WHERE pseudo = '$login' ";

$selectproduit1 = $connect->query($produit);

$selectproduit2 =$selectproduit1->fetch_assoc();


?>
</br>

<div style = "color:white; font-size:1em;" onclick = "document.location='./commande.php'">

<div id = "contact">

<div id = "commande">

mes produit

</br>

<p>commander un site</p>

</div>


</div>

</br>

<?php 

include_once("./footer.php");

?>

</body>

</html>

