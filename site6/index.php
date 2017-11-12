
     <link rel = "stylesheet" href = "http://www.vecchionet.com/site6/style/style.css">  

<div id = "site6a1">

<?php


$site= "site6";


if(file_exists('./site6/produit.php')){

include_once("./site6/produit.php");

}else{

include_once("./produit.php");

}


$d = 1;

$id = "pageproduit.php?product=".$d;

?>

<script src="./javascript/reply_click.js" type="text/javascript"></script> 

<?php 

if(file_exists("./site6/header.php")){

include_once("./site6/header.php");

}else{

include_once("./header.php");

}

?>

<script>

function reply(d,c,p,ca,pagea){

document.location = p+'?'+c+"="+d+"&categorie="+ca+"&page="+pagea;
}


</script>

<?php 

$categorie = str_replace("#","",getcwd());

$categorie = str_replace("site6","",$categorie);

$categorie = $categorie."/site6/categorie.php";


?>

<div id = "site6a3">
<div id = "site6a6">

<?php 

include($categorie);

?>

</div>

</div>

<center>

<?php 
$index = "./index.php";


while($s0 <= $page){

$s0++;

if($NB == 0){

$index = "?page=".$s0."&categorie=".$categorie1."#site6";

}else{
 $index = "./index.php?page=".$s0."&categorie=".$categorie1;
}
echo "<a href = '$index' >"; echo $s0; echo "</a>"; echo "&nbsp &nbsp &nbsp"  ;

}


if($s3 != $nbpage1){


$index = "?page=".$s0."&categorie=".$categorie1."#site6";


}



?>

</br>


</center>


<?php 

if(file_exists("./site6/footer.php")){

include_once("./site6/footer.php");

}else{

include_once("./footer.php");

}


?>
</div>
