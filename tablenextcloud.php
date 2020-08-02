<div>
<table>

<tr>
<th>pseudo</th> <td> <?php echo $cloud2['pseudo']; ?></td>
</tr>

<tr>
<th>email</th> <td> <?php echo $cloud2['email']?></td>
</tr>

<tr>

<th> date de fin abonement compte nextcloud</th>
<td> <?php echo $cloud2['date']?></td>

<?php 

$nb = 0;

$thier1 = "SELECT * FROM nextcloud WHERE createur = '$pseudo'";

$thier2 = $mysqli->query($thier1);

while($thier3 = $thier2->fetch_assoc()){

if($thier3['pseudo'] == $thier3['createur'] ){

$nb++;

}

}



?>
</table>


<table>

<tr>

<td>  nombre de compte dans le groupe : <?php

if($nb >= 1){

 echo $nb;

include("./boutongestcompte.php");


}else{
echo "pas de compte";

}

 ?>

</td>

</tr>

</table>

</div>


<div id = "gestcompte" >

</br>
<center id= "b6"> liste des comptes du groupe </center>
</br>

<table> 
<center>
<tr>
</tr>
</center>

<?php 

$nb = 0;

$thier2 = $mysqli->query($thier1);


while($thier3 = $thier2->fetch_assoc()){


if($thier3['pseudo'] != $thier3['createur'] ){

$nb++;

$login = $thier3['pseudo'];

$quota = "SELECT * FROM oc_preferences  WHERE userid= '$login' && appid = 'files' && configkey = 'quota'";

$quota = $nextcloud->query($quota);

$quota1 = $quota->fetch_assoc(); 


echo "<tr><td> nom:".$thier3['pseudo']."  <td> date de fin :".$thier3['date']."</td> "."<td> quota:".$quota1['configvalue']."</td> </tr>";
}

}


?>

</table>
</div>


