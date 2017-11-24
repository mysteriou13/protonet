<html>
<body>

<?php 

include("./hautepage.php");

?>

<div id = "contact" style = "height:100%; padding-top:1%;">

<div style = "margin-left:20%;  margin-right:30%; color:white; height:auto;">


<h1 style = "color:white;">

<center> offre web</center>

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

echo "document.getElementById('connection').style.display = 'block';";

}else{

echo "document.getElementById('commande').style.display = 'block'";

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

<div id  = "commande" style = "display:none; font-size:1em; ">

<form  method = "POST" id = "formcommande">

site vitrine <input type = "checkbox" id = "vitrine">
</br>
boutique<input type = "checkbox" id = "boutique">

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

