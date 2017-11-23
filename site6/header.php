
<?php 

$des = str_replace("/site6","",getcwd());

$site = "site6";

$des = $des."/des.php";

include_once($des);

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$url = $monUrl;

$nb = mb_substr_count($monUrl, "site6");

$NB = mb_substr_count($monUrl, "site6");

$produit = mb_substr_count($monUrl, "pageproduit");

$site6 = mb_substr_count($monUrl, "?categorie");

$site6a1 = mb_substr_count($monUrl, "/site6");

$site6a2 = mb_substr_count($monUrl, "#site6");

$nbpage = mb_substr_count($monUrl, "?page");

$pageproduit = "pageproduit.php";



if($produit == 1){

$u = explode("pageproduit.php",$monUrl);

$url = $u[0]."#site6";

}


$lien3 = getcwd();

$lien3 = str_replace("site6","",$lien3);

$lien3 = $lien3."/fonction/url.php";

include_once($lien3);

$lien2 = new lien();

$url =  $lien2->url("6");

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

 $site6ab1 = mb_substr_count($url, "/site6");

if($nb == 0){

$ancre6 = "#site6";

$lien = str_replace("site6","index.php", $lien);

}else{

$ancre6 = null;

}

if(isset($_GET['page'])){

 $pageb = $_GET['page'];

}else{

$pageb = 1;

}

if(isset($_GET['categorie']) && !empty($_GET['categorie']) ){
$url1 = explode("?",$url);

if($nb == 0){

$url1 = $url1[0]."/site6/index.php"."?"."categorie=".$_GET['categorie']."&page=".$_GET['page'];

$url = $url1;

}

if($nb == 1){

   $url1 = $url1[0];

   $url = str_replace("#site6","",$url);
  
   $url1 = $url."?categorie=".$_GET['categorie']."&page=".$_GET['page']."#site6";
   
    $url = $url1;

}
}

if($produit == 1){

$url = str_replace("index.php","site6/index.php",$url);

$url = str_replace("#site6","",$url);

$lien = str_replace("pageproduit","index",$lien);

$lien = $lien."?categorie=".$_GET['categorie']."&page=".$_GET['page'];

}

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

echo $lien."?categorie=1&page=".$pageb.$ancre6;

echo "'";

?>


">

cat&eacute;gorie 1

</br>
<?php 


?>
</div>

<div id = "categorie2" onclick ="
<?php

echo " document.location = ' ";

echo $lien."?categorie=2&page=".$pageb.$ancre6;


echo "'";

?>

">
cat&eacute;gorie 2
</div>


<div id = "categorie3" onclick = "
<?php

echo " document.location = ' ";

echo $lien."?categorie=3&page=".$pageb.$ancre6;


echo "'";

?>


">
cat&eacute;gorie 3

</div>


</div>

</div>
