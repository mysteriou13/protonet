
<link rel  = "stylesheet" href = "http://www.vecchionet.com/site3/style/style.css">

 <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

<?php

$file = "./des.php";

$site= "site3";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}


$lien3 = getcwd();

$lien3 = str_replace("site3","",$lien3);

$lien3 = $lien3."/fonction/url.php";

include_once($lien3);


$lien2 = new lien();

$url =  $lien2->url("3");

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$page = str_replace("/site3","",getcwd());

$header = $page."/site3/section/header.php";

$accueil = $page."/site3/section/accueil.php";

$contact = $page."/site3/section/contact.php";

$propos = $page."/site3/section/propos.php";

$footer = $page."/site3/section/footer.php";
$aside = $page."/site3/section/aside.php";

?>

<center>
<a href = "<?php echo $url?>"><?php echo  $des1; ?></a>
</center>

<div style = "height:60%; background-color:gray;"  alt="Description" >
<?php 

include_once($header);

?>

<div id = "site3a2" >
<?php 

if(isset($_GET['parametre3']) && !empty($_GET['parametre3'])){
if( $_GET['parametre3'] == 1 ){

include($accueil);

}

if( $_GET['parametre3'] == 2 ){

include_once($contact);

}

if( $_GET['parametre3'] == 3 ){

include_once($propos);

}
}else{

include_once($accueil);


}
?>
</div>
<?php 

include_once($footer);

?>




</div>

