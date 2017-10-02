
<?php

$file = "./des.php";

$site= "site4";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

 $url = $monUrl;

$nb = mb_substr_count($monUrl, "site4");

if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = str_replace('site4/','#site4',$monUrl);;
}else{

$url = $url."site4/";

}
?>

<center>
<a href = "<?php echo $url; ?>" ><?php echo  $des1;  ?></a>
</center>

<link rel = "stylesheet" href = "http://localhost/corsicanet/site4/style/style.css">

<div id = "site4a7" style= "background-color:rgb(164,249,112);"  alt="Description"  >

<div id= "site4a1" style = "background-color:rgb(75,138,36);">
<center>
votre titre
</center>
</div>

<div id = "site4a2">
<div id =  "site4a3">
votre menu
</div>

<div id = "site4a4" >
<center>
votre text
</center>
</div>

<div id = "site4a5">

</div>

</div>

<div id = "site4a6">

<center>
mention l&eacute;gal
</center>
</div>
</div>
