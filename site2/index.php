<link rel  = "stylesheet" href = "http://localhost/corsicanet/site2/style/style.css">

<?php

$file = "./des.php";

$site= "site2";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}


 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

 $url = $monUrl;

 $nb = mb_substr_count($monUrl, "site2");

 $nb1 = mb_substr_count($monUrl, "#");

 $nb2 = mb_substr_count($monUrl, "index.php");

 $nb3 = mb_substr_count(getcwd(),"/site2");

 $nb4 = str_replace("site1","",getcwd());

 $nb5 = mb_substr_count($monUrl,"/site2/index.php");
 
 
if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = str_replace('site2/','index.php#site1',$monUrl);;
}else{

$url = $url."/site2/index.php";

}

if($nb2 == 1){

$c = explode('/index.php',$url);

$url = $c[0]."/site2/index.php";

if($nb == 1 ){

$url = $c[0]."/index.php#site2";

}

}

if(isset($_GET['parametre'])){


$url = str_replace("index.php#site2","",$url);

$url = $url."?parametre=".$_GET['parametre']."#site2";


}




$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];


$page = str_replace("/site2","",getcwd());

$header = $page."/site2/section/header.php";

$accueil = $page."/site2/section/accueil.php";

$contact = $page."/site2/section/contact.php";

$footer = $page."/site2/section/footer.php";


?>
<center>
<a href = "<?php echo $url;?>"><?php echo $des1?></a>
</center>

<?php 

include_once($header);


if(isset($_GET['parametre2']) && !empty($_GET['parametre2'])){
if( $_GET['parametre2'] == 1 ){

include_once($accueil);

}

if($_GET['parametre2'] == 2){

include($contact);

}

if($_GET['parametre2'] == 3){

include_once($propos);

}

}else{

include_once($accueil);

}

include_once($footer);

?>
