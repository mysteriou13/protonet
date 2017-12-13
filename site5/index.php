
<?php

$file = "./des.php";

$site = "site5";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}


$lien3 = getcwd();

$lien3 = str_replace("site5","",$lien3);

$lien3 = $lien3."/fonction/url.php";

include_once($lien3);

$lien2 = new lien();

$url =  $lien2->url("5");

$url = htmlspecialchars($url);

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$lien = htmlspecialchars($lien);

$page = str_replace("/site5","",getcwd());
$header = $page."/site5/section/header.php";
$header  = htmlspecialchars($header);
$footer = $page."/site5/section/footer.php";
$footer = htmlspecialchars($footer);
$nav = $page."/site5/section/nav.php";
$nav =  htmlspecialchars($nav);
$element = $page."/site5/section/element.php";
$element = htmlspecialchars($element);

?>

<center>
<a href = "<?php echo $url?>"><?php echo $des1?> </a>
</center>

<link rel = "stylesheet" href = "http://www.vecchionet.com/site5/style/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">     



<div id = "site5a1"  alt = "Description"  >

<?php 
include($header);
?>

<div id = "site5a2">
<?php
include_once($element);
?>
</div>
<?php 
include($footer);
?>
</div>

