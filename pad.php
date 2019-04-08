<html>
<body>

<?php 
include_once("header.php");
include_once("./head.php");


?>

<div style = "

<?php 

if($mobile == false){
echo "display:flex;";

}
?>

">

<div>
<center>

<p id = "b3">
vecchiopad est un instance etherpad-lite, editeur de text  permetant de travailler en plusieur simultanément  sur un même document
</br>

<a href = "https://github.com/ether/etherpad-lite" target = "_blank">lien vers le code source</a>

</p>

<p>
<button  onClick = "parent.location = 'etherpad.php?temps=+7days&type=pad'"> pad 1  semaine </button>

<button  onClick = "parent.location = 'etherpad.php?temps=+1month&type=pad'" > pad 1  mois </button>  

<button onClick = "parent.location = 'etherpad.php?temps=+3month&type=pad'" > pad 3  mois </button>

</p>

<p>
  <button  onClick = "parent.location = 'etherpad.php?temps=+6month&type=pad'" > pad 6  mois </button>
 
  <button  onClick = "parent.location = 'etherpad.php?temps=+1year&type=pad'"> pad 1 ans </button>
</p>
 
 </p>
</center>
</div>


<div>
<img src = "./image/etherpad.png"   >
</div>

</div>

</body>
</html>
