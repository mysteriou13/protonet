<?php 
class affichedate(){

private $date = date("dmy");

private $jour = substr($date,0,2);

private $mois = substr($date,2,2);

private $anner = substr($date,4,2);

function afficheajour(){

return $this->jour;

}

function affichemois(){

return $this->mois;

}

function afficheanner(){


}

}

?>
