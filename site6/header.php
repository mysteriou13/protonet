
<?php 
$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$url = "http://localhost/corsicanet/site6/index.php";

$nb = mb_substr_count($monUrl, "site6");

$produit = mb_substr_count($monUrl, "pageproduit");

if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = "http://localhost/corsicanet/#site6";
}

if($produit == 1){

$url = "http://localhost/corsicanet/site6/index.php";

}

?>

<center>
<a href = "<?php echo $url?>"><?php echo $des1;?></a>
</center>

<div id ="site6a2"  alt = "Description">
<center>

votre titre

</center>

</div>

