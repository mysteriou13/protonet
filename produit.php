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

$produit3 = $connect->query($produit);


$d = 0;


 ?>






<?php 

while($produit2 = $produit1->fetch_assoc()){

$d++;

echo "<div style = 'margin-bottom:1%; display:flex; justify-content:space-around; border:1px solid; margin:1%; '>";

echo "<div>";

echo "commande nº".$d;

echo "</div>";

echo "<div>";

echo "type de site&nbsp;&nbsp; : &nbsp;&nbsp;".$produit2['typesite'];

echo "</div>";

echo "<div>";

echo "etat &nbsp;&nbsp; : &nbsp; &nbsp;".$produit2['suivi'];

echo "</div>";

echo "</div>";


}

?>








</div>
</div>


<?php 
include_once("footer.php");
?>
</body>
</html>
