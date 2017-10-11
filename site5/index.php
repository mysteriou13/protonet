
<?php

$file = "./des.php";

$site= "site5";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

$url = $monUrl;
$page = str_replace("/site5","",getcwd());
$header = $page."/site5/section/header.php";
$footer = $page."/site5/section/footer.php";
$nb = mb_substr_count($monUrl, "site5");

if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = str_replace('site5/','#site5',$monUrl);;
}else{

$url = $url."site5/";

}


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

</div>
<?php 
include($footer);
?>
</div>

