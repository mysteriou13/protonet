
<?php 

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$url = $monUrl;

$nb = mb_substr_count($monUrl, "site6");

$produit = mb_substr_count($monUrl, "pageproduit");

if($nb == 1){


$des1 = "cliquer pour retourner a l'index";

$url = "http://localhost/protonet/#site6";

}else{


$url = $url."/site6";

}

if($produit == 1){

$u = explode("pageproduit.php",$monUrl);

$url = $u[0]."#site6";
}

$e = explode("site6",$monUrl);

$url1 = $e[0]."site6/index.php#categorie1";


?>

<center>
<a href = "<?php echo $url?>"><?php echo $des1;?></a>
</center>
<div  style =  "border:1px solid white ;background-color:navy; color:white;"   alt = "Description">

<center style = "
margin-bottom:2%;
">
votre titre
</center>

<div style = "
position:relative;
display: flex;
justify-content: space-around;

">

<div id = "categorie1" onclick = "

<?php 

echo " document.location = ' ";

echo $url1;

echo "'";

?>


">

cat&eacute;gorie 1
</div>

<div>
cat&eacute;gorie 2
</div>

<div>
cat&eacute;gorie 3

</div>

<div>
cat&eacute;gorie 4
</div>

</div>

</div>
