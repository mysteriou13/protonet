<div id ="listebutton"> <div  
onclick = "par.affiche('buttonparametre','parametre',listebutton,listediv)" > <button id="buttonparametre"  class="b4">parametre</button></div> 

<div  onclick = "par.affiche('buttonnextcloud','nextcloud',listebutton,listediv,'comptenextcloud','perso',listesousdiv)"><button id ="buttonnextcloud"  class ="b4">  nextcloud</button></div>  </div>

<div id = "parametre" class= "b3">
<table id ="tab">

<caption >
parametre
</caption>

<tr>

<td>
<center> pseudo : <?php echo $select2['pseudo']?></center>
</td>

</tr>


<td>

<center> <button  onclick ="par.display('changepass')"> changer de mot de pass </button></center>

</tr>

<?php 
require("../section/changepass.php");
?>

<tr>
<td>
<?php 


$verif =  $select2['verifemail']; 

if($verif == 0){

echo "<center> non verfi&eacute; &nbsp;"."<a href ="."'".$email."'"." style = 'color:white'>verifier email</a></center>";



if(isset($_GET['email']) && !empty($_GET['email'])){

$length =  rand(10, 50);

$token = bin2hex(random_bytes($length));

$message = "pour confirmé votre adress mail copier  dans votre navigateur web : :".$link;

$e->envoiemail($select2['email'],"confirmation email",$message,"mrmassaanthony@gmail.com");



}

}

if($verif == 1){

echo "verfi&eacute;";

}
?>

</td>
</tr>

</table>

</div>


<div id="nextcloud" class="b3" >

<div id ="perso">

<center>

<a href = "newcompte.php">
<button>
<?php 
if($next2['pseudo'] == 1){


echo "renouveller";

}else{

echo "commander";

}

?>
 compte  nextcloud
</button>
</a>

</center>

</br>


<?php 

 if($next2['pseudo'] == 0){

 echo "<center>pas encore de compte nextcloud </center>";

 }else{

include("../section/tablenextcloud.php");
  }


?>

 </div>

<div id = "thiercloud">

</br>
<?php 

$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

$pseudo1 = "SELECT *  FROM nextcloud WHERE createur = '$pseudo'";

$pseudo2 = $mysqli->query($pseudo1);




while($pseudo4 = $pseudo2->fetch_assoc() ){

if($pseudo4['pseudo'] != $_SESSION['pseudo']){

echo "<table>";
echo "<tr>"; echo "<th>";echo "pseudo"; echo "</th>"; echo "<td>"; echo $pseudo4['pseudo']; echo "</td>";  echo"</tr>";
echo "<tr>"; echo "<th>";echo "date de fin d'abonoment"; echo "</th>"; echo "<td>"; echo $pseudo4['date']; echo "</td>";  echo"</tr>";
echo "</table>";

echo "</br>";

}

}

?>


</div>

 </div>


