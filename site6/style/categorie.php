

<?php 

$s = 7;

$nbproduit =50;

$nbpage = $nbproduit;

$nbpage1 = $nbproduit;

 $nombre = $nbpage1/$s;

$nb = explode('.', $nombre); //on explose la chaine au niveau du point

 $entier = $nb[0]; //on recupere la premiere caine, situee avant le point

$page = $entier-1;

$pagea = 1;

if(isset($_GET['page'])){

$pagea = $_GET['page'];

}

$s0 = 0;

$divproduit1 = str_replace("/site6","",getcwd());

 $divproduit2 = $divproduit1."/site6/divproduit.php";

if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] >=2){

$s1 = $_GET['page'];

}else{

$s1 = 1;

}

 $s3 = $s1;

$s3 = $s3;

if($s3 <= $nbpage1-1){
$s3 = $s1*8;

 $s3 = $s3-1;


 $s4 = $s3-8;



while($s4 < $s3){

$s4++;

if($nbpage1 >= $s4){

include($divproduit2);

}

}

}

?>


