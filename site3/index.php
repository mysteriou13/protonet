
<link rel  = "stylesheet" href = "http://localhost/corsicanet/site3/style/style.css">

<?php

$file = "./des.php";

$site= "site3";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

 $url = $monUrl;

$nb = mb_substr_count($monUrl, "site3");

if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = str_replace('site3/','#site3',$monUrl);;
}else{

$url = $url."site3/";

}


?>

<center>
<a href = "<?php echo $url?>"><?php echo  $des1; ?></a>
</center>

<div   alt="Description" >
<div style = "background-color:gray; color:white; ">

<
<div id = "site3a2" >



<div style = "border:1px solid black; width:20%; margin-top:1%; ">
d
</div>

</div>

<div style = "
padding-bottom:5%;

margin-top:2%;

border:1px solid black;


">

<div id = "site3a4" >
mention l&eacute;gal
</div>

</div>

</div>
</div>

