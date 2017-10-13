

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


