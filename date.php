<?php 
class affichedate(){

private $date = date("dmy");

private $jour = substr($date,0,2);

private $nbjour = null;

private $mois = substr($date,2,2);

private $nbmois = null; 

private $anner = substr($date,4,2);

private $nbanner = null;

function setjour($day){

if($day > $this->jour){

$this->nbjour = $day-$this->jour;

return $this->nbjour;

}

return $this->nbjour;

}

function setmois($mouth){

if($mouth > $this->mois){

$this->nbmois = $mouth-$this->mois;

return $this->nbmois;

}

return $this->nbmois;

}


function affichejour(){

return $this->jour;

}

function affichemois(){

return $this->mois;

}

function afficheanner(){

return $this->anner;

}

}

?>
