<div id = "site6a1">

<?php

$file = "./des.php";

$site= "site6";


if(file_exists('./site6/produit.php')){

include_once("./site6/produit.php");

}else{

include_once("./produit.php");

}

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}

$d = 1;

$id = "pageproduit.php?product=".$d;

?>

<script src="./javascript/reply_click.js" type="text/javascript"></script> 

<link rel = "stylesheet" href = "http://localhost/corsicanet/site6/style/style.css" >


<?php 

if(file_exists("./site6/header.php")){

include_once("./site6/header.php");

}else{

include_once("./header.php");

}

?>

<script>

function reply(d,c,p){

document.location = p+'?='+c+"="+d;

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


while($s0 <= $page){

$s0++;

echo "<a href = './index.php?page=$s0' >"; echo $s0; echo "</a>"; echo "&nbsp &nbsp &nbsp"  ;

}


 $s0= $s0+1;



if($s4 != $nbpage){

while($s4-1 < $nbpage-1){
 $s4++;


}

}


if($nombre  != $entier){

echo "<a href = './index.php?page=$s0' >"; echo $s0; echo "</a>"; echo "&nbsp &nbsp &nbsp";

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
