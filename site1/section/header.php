
<?php 


$url = explode("/index.php",$monUrl);

$propos = $url[0]."/site1/propos.php";

?>

<div id = "conteneur1" style = " width:100% height:100%; background-image: url(<?php echo $background; ?>); background-repeat:no-repeat;  background-size: 100% 100%; " >
<div id = "c1">

<center>
votre titre
</center>

<div id = "c4">

<div
onclick = "

<?php 

echo " document.location = ' ";

if($nb == 0){

echo $url1."#site1";

}
echo "'";

?>
"


>
accueil
</div>

<div onclick = "

<?php 

echo " document.location = ' ";

echo $propos;

echo "'";

?>
">
a propos
</div>

<div>
contact
</div>

</div>

</div>

