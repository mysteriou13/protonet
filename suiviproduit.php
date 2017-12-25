<?php 
session_start();
?>
<html>
<body>

<?php 
include("./hautepage.php");
?>

<div id = "conteneur2" style = "padding-top:1%;">

<?php

$produit = htmlspecialchars($_GET['produit']);

$produit = "SELECT * FROM commande WHERE id = '$produit'";

$produit2 = $connect->query($produit);

$produit3 = $produit2->fetch_assoc();


 ?>

<div  style = "color:white; font-size:1.5em;  display:flex; justify-content: space-around; ">
<center>
ficher  de suivi de la commande nº <?php echo $_GET['nbproduit'] ?>
<div>
type de produit :
<?php
echo $produit3['typesite'];
 ?>
</div>

<div>
suivi:
<?php

echo $produit3['suivi'];

 ?>
</div>

</div>
</center>
</div>
<?php
include("./footer.php");
 ?>
</body>
</html>

