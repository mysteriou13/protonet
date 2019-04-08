
<html>
<body>
<?php 
include_once("head.php");
include_once("header.php");

?>

<center>

<p id = "b3">
vecchiocalc est un instance  ethercalc tableur  permetant de travailler en plusieur simultanément  sur un même document
</br>

<a href = "https://github.com/audreyt/ethercalc" target = "_blank"> lien vers le code source </a>

</p>

<div style = "

<?php 

if($mobile == false){
echo "display:flex;";

}
?>



">
<div>

<p style = "margin-top:5em;">
  
  <button  onClick = "parent.location = 'ethercalc.php?type=calc&temps=7day'"> calc 1  semaine </button>


<button  onClick = "parent.location = 'ethercalc.php?type=calc&temps=+1month'" > calc 1  mois </button>  

  <button style = " color:white; background-color:Blue; font-size:2em; margin-right:1%; border-radius:30px;"
onClick = "parent.location = 'ethercalc.php?type=+3month&temps=3mois'" > calc 3  mois </button>

 </br>
</br>
</br>
 
  <button onClick = "parent.location = 'ethercalc.php?temps=+6month&type=calc'" > calc 6  mois </button>
 
  <button onClick = "parent.location = 'ethercalc.php?temps=+1year&type=calc'"> calc 1 ans </button>

 
 </p>
</div>

<div >
<img src = "./image/ethercalc.png">
</div>

</div>

</html>
</body>

