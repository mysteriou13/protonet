<?php 
include_once("header.php");
include_once("./head.php");
?>


<center>

<p id = "b3">
vecchiopad est un instance d'etherpad-lite, editeur de text  permetant de travailler en plusieur simultanément  sur un même document
</p>

<button  onClick = "parent.location = 'etherpad.php?pad=+7days&durer=7jour'"> pad 1  semaine </button>

<button  onClick = "parent.location = 'etherpad.php?pad=+1month&durer=1 mois'" > pad 1  mois </button>  

  <button onClick = "parent.location = 'etherpad.php?pad=+3month&durer=3 mois'" > pad 3  mois </button>

 </br>
</br>
</br>
 
  <button  onClick = "parent.location = 'etherpad.php?pad=+6month&durer=6 mois'" > pad 6  mois </button>
 
  <button  onClick = "parent.location = 'etherpad.php?pad=+1year&durer=1 ans'"> pad 1 ans </button>

 
 </p>
</center>

