<html>
<body>

<?php 

include("./hautepage.php");

?>

<div id = "contact" style = "height:100%; padding-top:1%;">

<div style = "margin-left:20%;  margin-right:30%; color:white; height:auto;">


<h1 style = "color:white;">

<center id = "connection1"> offre web</center>

</h1>

<h2>
<center>
30 euros/mois
</center>
</h2>

<h3>
<ul>
<p style = "text-align:left;">
<li>
un site adapter pour  pc tablette et telephone.
</li>
</br>
<li>
suivi tout long de la creation du site.
</li>
</br>
<li>
assitance techinique.
</li>
</br>
<li>
r&eacute;f&eacute;rencement de votre site dans les moteurs de recherche
</li>
</br>
<li>
aucun engagement
</li>
<center>

<div onclick = "
<?php

if(!isset($_SESSION['pseudo'])){

echo "document.getElementById('connection').style.display = 'block'; document.location = '#connection1'";

}else{

echo "document.getElementById('commande').style.display = 'block';  document.location = '#formcommande'";

}

?>
">
commander ici
</div>

</center>

<div id = "connection" style = "display:none">

<center>
connecter vous pour commander un site
</center>

<?php 
include_once("./formlogin.php");
?>

</div>

<?php 

$display = "none";

if(isset($_SESSION['pseudo']) && ! empty($_SESSION['pseudo'])){

$display = "block";



}


?>

<div id  = "commande" style = "display:<?php echo $display; ?>; font-size:1em; ">

<form  method = "POST"  action = "<?php 
if(isset($_POST['site']) && !empty($_POST['site'])){

echo "commandevalide.php";

}else{

echo $_SERVER['PHP_SELF']."#formcommande";

}

  ?>
" id = "formcommande" style = "border:1px solid black; background-color:gray;">
<center>
fornulaire de precommande
</br>
type de site
</br>
<input type= "radio" name="site" value="jour"> site vitrine
</br>
<input type= "radio" name="site" value="nuit"> boutique en ligne
</br>
<input type = "submit"  value = "envoyer">

<?php 
if(isset($_POST['site']) && !empty($_POST['site'])){

$pseudo = $connect->real_escape_string(htmlspecialchars($_SESSION['pseudo']));

$site = $connect->real_escape_string(htmlspecialchars($_POST['site']));

$suivi1 = "precommande";

$suivi1 = htmlspecialchars($suivi1);

$suivi = $connect->real_escape_string($suivi1);

$site = "INSERT INTO commande VALUES('','$pseudo','$site','$suivi')";

$connect->query($site);

}

?>

</center>

</form>

</div>

</p>

</ul>
</h3>
</div>

</div>
<?php

include_once("./footer.php");

?>

</body>
</html>

