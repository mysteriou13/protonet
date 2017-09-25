<?php



$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$des1 = "clicker pour agrandir";

 $nb = mb_substr_count($monUrl, $site);

if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

}


?>



