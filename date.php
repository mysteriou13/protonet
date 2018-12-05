<?php 
class affichedate{

private $jour = null;

private $nbjour = null;

private $mois = null;

private $nbmois = null; 

private $anner = null;

private $nbanner = null;

function getjour($date){

$this->jour = substr($date,0,2);

return $this->jour;

}

function getmois($date){

$this->mois = substr($date,2,2);

return $this->mois;

}

function getanner($date){

$this->anner = substr($date,4,2);

return $this->anner;

}

function setjour($day){

if($day > $this->getjour()){

$this->nbjour = $day-$this->getjour();

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

function setanner($year){

if($year > $this->anner){

$this->nbanner = $year-$this->anner;

return $this->nbanner;

}

return $this->nbanner;

}


}

?>
