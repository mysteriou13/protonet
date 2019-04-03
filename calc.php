
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
  
  <button  onClick = "parent.location = 'ethercalc.php?calc=+7days&durer=7jour'"> calc 1  semaine </button>


<button  onClick = "parent.location = 'ethercalc.php?calc=+1month&durer= un mois'" > calc 1  mois </button>  

  <button style = " color:white; background-color:Blue; font-size:2em; margin-right:1%; border-radius:30px;"onClick = "parent.location = 'ethercalc.php?calc=+3month&durer=3mois'" > calc 3  mois </button>

 </br>
</br>
</br>
 
  <button onClick = "parent.location = 'ethercalc.php?calc=+6month&durer=6 mois'" > calc 6  mois </button>
 
  <button onClick = "parent.location = 'ethercalc.php?calc=+1year&durer=1ans'"> calc 1 ans </button>

 
 </p>
</div>

<div >
<img src = "./image/ethercalc.png">
</div>

</div>

</html>
</body>

