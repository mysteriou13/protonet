
<?php

if(file_exists("./site1/style/style.css")){

$style = './site1/style/style.css';

}else{

$style = '../site1/style/style.css';

}

?>

<link rel = "stylesheet" href = "<?php echo $style;?>">

<?php 

 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

 $url = $monUrl;

 $nb = mb_substr_count($monUrl, "site1");

 $nb1 = mb_substr_count($monUrl, "#");

 $nb2 = mb_substr_count($monUrl, "index.php");

 $nb3 = mb_substr_count(getcwd(),"site1");

 $nb4 = str_replace("site1","",getcwd());


if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = str_replace('site1/','index.php#site1',$monUrl);;
}else{

$url = $url."/site1";

}

if($nb2 == 1){

$c = explode('/index.php',$url);

$url = $c[0]."/site1/index.php";

if($nb == 1 ){

$url = $c[0]."#site1";

}

}

$url1 = str_replace("/site1","",$url);


$background = '/../../protonet/coiffure.jpeg';

$accueil =$nb4."/site1/page/accueil.php";

?>

<center>

<a href = "<?php echo $url;?>"><?php echo $des1;?> </a>

</center>

<?php 
$header = $nb4."/site1/section/header.php";

include_once($header);

include_once($accueil);

?>

