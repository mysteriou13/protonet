<?php 

class lien{

function url($n){

 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

 $nbsite = $n;

 $parametre = "parametre".$nbsite;
 
 $site = "site";
 
 $url = $monUrl;

 $nb = mb_substr_count($monUrl, $site);

 $nb1 = mb_substr_count($monUrl, "#");
 
 $nb2 = mb_substr_count($monUrl, "index.php");

 $nb3 = mb_substr_count(getcwd(),"/site".$nbsite);

 $nb4 = str_replace($site.$nbsite,"",getcwd());

 $nb5 = mb_substr_count($monUrl, $site."/"."/index.php");
 
 $c = explode("site".$n,$url);


if($nb1 == 0){
if($nb2 == 1){
if($nb3 == 0){

 if(isset($_GET[$parametre])){
 $a = "index.php?parametre"."=".$site.$_GET[$parametre]; 

 $a1 = "?".$parametre."=".$_GET[$parametre];

 $url = str_replace($a1,"site".$nbsite."/" ,$url);

  $url = str_replace("index.php","",$url);
  

  $url = $url."index.php?".$parametre."=".$_GET[$parametre];
}else{


 $url = str_replace("/index.php","",$url);
  $url = $url."/site".$nbsite;

}

}
}


if($nb2 == 1){
if($nb3 == 1){
$url = $c[0]."index.php#site".$nbsite;

}
}

if($nb2 == 0){
if($nb3 == 1){
$url = str_replace("site".$nbsite,"",$c[0]);

$url = $url."index.php#site".$nbsite;

}
if($nb3 == 0){

$url = $c[0];

 $a = explode("?",$c[0]);

 $url = $a[0]."site".$nbsite;
}
}
}


if(isset($_GET[$parametre])){


$url = str_replace("index.php#site".$nbsite,"",$url);

$url = $url."?".$parametre."=".$_GET[$parametre]."#site".$nbsite;


}

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

return $url;

}
}

?>

