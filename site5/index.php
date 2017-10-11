
<?php

$file = "./des.php";

$site= "site5";

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

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];



$page = str_replace("/site5","",getcwd());
$header = $page."/site5/section/header.php";
$footer = $page."/site5/section/footer.php";
$element = $page."/site5/section/element.php";

?>

<center>
<a href = "<?php echo $url?>"><?php echo $des1?> </a>
</center>

<link rel = "stylesheet" href = "http://localhost/protonet/site5/style/style.css">

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

