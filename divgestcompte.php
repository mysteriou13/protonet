<div id = "gestcompte" >

</br>
<center id= "b6">

 liste des comptes du groupe 

 </center>

<table> 
<center>
<tr>
</tr>
</center>

<?php 

$thier1 = "SELECT * FROM nextcloud  WHERE createur = '$pseudo'";

$thier2 = $mysqli->query($thier1);


while($thier3 = $thier2->fetch_assoc()){

if($thier3['pseudo'] != $thier3['createur']){

$login = $thier3['pseudo'];

$quota = "SELECT * FROM oc_preferences  WHERE userid= '$login' && appid = 'files' && configkey = 'quota'";

$quota = $nextcloud->query($quota);

$quota1 = $quota->fetch_assoc(); 


echo "<tr> <td> <center> nom:".$thier3['pseudo']."</center></td>  <td> <center> date de fin :".$thier3['date']."</center> </td> "."<td><center> quota:".$quota1['configvalue']."</center></td> </tr>";

}

}



?>

</table>
</div>


