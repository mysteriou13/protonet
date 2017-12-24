
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

<div  style = "display:flex; border:1px solid white; justify-content: space-around; ">

<div style = " display:flex; justify-content:space-between; border:1px solid; margin:1%; ">


</div>

<div>


</div>

</div>


</div>

<?php
include("./footer.php");
 ?>
</body>
</html>

