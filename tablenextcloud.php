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

$thier1 = "SELECT * FROM nextcloud WHERE pseudo = '$pseudo'";

$thier2 = $mysqli->query($thier1);


while($thier3 = $thier2->fetch_assoc()){

if($thier3['pseudo'] == $thier3['createur'] ){

$nb++;

}

}



?>

<table>

<tr>

<td>  nombre de compte : <?php

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


</tr>

</table>

<div id = "gestcompte" class = "b6">
<center> gestion des compte </center>

</div>

