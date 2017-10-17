
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

$categorie1 = 1;

if(isset($_GET['categorie'])){

$categorie = $_GET['categorie'];

}

$page = 1;

if(isset($_GET['page'])){

$page = $_GET['page'];

}


$pagea = 1;

if(isset($_GET['page'])){

$pagea = $_GET['page'];

}

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

if($site6 == 1){

$site61 = explode("?",$lien);

 $url = $site61[0]."/site6/?categorie=".$_GET['categorie']."&page=".$page;

 $url = str_replace("index.php/","",$url);

if($site6a1 == 1){

$url = str_replace("/site6","",$url);

$urla = explode("?",$url);

 $url = $urla[0]."index.php?categorie=".$_GET['categorie']."&page=".$page."#site6";

}


}

if($site6 == 0){
if(isset($_GET['page'])){

$url1 = explode("?",$url);

$url = $url1[0]."/site6/?page=".$_GET['page']."&categorie=".$categorie1;

if($site6a1 == 1){


$url = str_replace("#site6/site6/","",$url);

$url = $url."#site6";

}


}
}

 $site6ab1 = mb_substr_count($url, "/site6");

if($site6a1 == 2){

$url = str_replace("/site6/site6/","/site6",$url);

}

if($site6 == 0 && $nbpage ==0){

 $url= str_replace("#site6","",$url);

 $url = $url."?page=".$page."&categorie=".$categorie1."#site6";

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

echo $lien."?categorie=1&page".$page."#site6";

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
