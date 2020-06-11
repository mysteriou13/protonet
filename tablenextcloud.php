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
$nb = "SELECT *  FROM  nbgroupe  WHERE pseudo = '$pseudo'";

$nb1 = $mysqli->query($nb);

$nb2 = $nb1->fetch_assoc();



$thier1 = "SELECT COUNT(*)pseudo  FROM nbgroupe WHERE pseudo = '$pseudo'";

$thier2 = $mysqli->query($thier1);

$thier3 = $thier2->fetch_assoc();





if($thier3['pseudo'] == 1){

echo "<table>";

echo "<tr>";

echo "<td>nombre de compte :".$nb2['nb']."</td>";

echo "</tr>";

echo "</table>";

}

?>


</tr>

</table>


