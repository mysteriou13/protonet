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

if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = str_replace('site2/','#site2',$monUrl);;
}else{

$url = $url."site2/";

}

?>
<center>
<a href = "<?php echo $url;?>"><?php echo $des1?></a>
</center>
<div id = "c1a"   alt="Description">
<div id = "c1b" >

<div id = "blanc" >


titre


</div>

</div>

<div id = "c1c">

<p id = "blanc" > 

Votre text

</p>

</div>

<div id = "c1e">
<p id = "blanc">
mention l&eacute;gal
</p>

</div>

</div>

