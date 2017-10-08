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

include_once("/opt/lampp/htdocs/protonet/fonction/url.php");

$lien2 = new lien();

$url =  $lien2->url();

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$page = str_replace("/site2","",getcwd());

$header = $page."/site2/section/header.php";

$accueil = $page."/site2/section/accueil.php";

$contact = $page."/site2/section/contact.php";

$propos = $page."/site2/section/propos.php";

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
