
<?php 

$url = explode("/index",$monUrl);



echo "</br>";


  $propos =  str_replace("index.php#site1","",$monUrl);


 $page = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

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


echo $page."?parametre=1#site1";

echo "'";

?>
"


>
accueil
</div>


<div 

onclick = "
<?php 
echo " document.location = ' ";


echo $page."?parametre=2#site1";


echo "'";



?>
">
a propos
</div>

<div

onclick = "
<?php 
echo " document.location = ' ";


echo $page."?parametre=3#site1";


echo "'";



?>
"

>
contact
</div>

</div>

</div>

