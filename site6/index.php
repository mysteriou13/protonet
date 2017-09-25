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


<div id = "site6a3">
<div id = "site6a6">

<?php 

$s = 8;

$nbpage = 57;

$nombre = $nbpage/$s;

$nb = explode('.', $nombre); //on explose la chaine au niveau du point

$entier = $nb[0]; //on recupere la premiere caine, situee avant le point


$page = $entier-1;


$s0 = 0;

if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] >=2){

$s1 = $_GET['page'];

}else{

$s1 = 1;

}

$s3 = $s*$s1;

$s4 = $s3-$s;

$total = $entier*$s;

if($s4 < $nbpage ){
if($s1 >=1){

while($s4 < $s3){

$s4++;

if($s4 <$total+1){

if(file_exists('./divproduit.php')){

include("./divproduit.php");

}else{

include('./site6/divproduit.php');

}

}

}

}

}



$page1 = $entier*$s;

$nbpage1 = $nbpage-1;

if($entier != $nombre && isset($_GET['page'])  && !empty($_GET['page'] ) && $_GET['page'] > $entier ){

$page1 = $page1;

while($page1-1 < $nbpage-1){

$page1++;

if(file_exists('./divproduit.php')){

include("./divproduit.php");

}else{

include('./site6/divproduit.php');

}


}

}


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
