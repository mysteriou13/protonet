<?php 

function listdiv($mysqli,$type,$order){


$type = $mysqli->real_escape_string($type);

$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

$list = "SELECT * FROM url WHERE pseudo = '$pseudo' && type = '$type' ORDER BY id $order";

$list2 = $mysqli->query($list);

$type = null;

$lien = null;

$name = null;

$jour = null;

$mois = null;

$anner = null;

while($liste3 = $list2->fetch_assoc() ){

 $name = $liste3["name"];
 
 $id = $liste3['id'];

 $lien = $liste3['url'];

 $type =  $liste3['type'];

 $jour =  $liste3['jour'];

 $mois = $liste3['mois'];

 $anner = $liste3['anner'];

 $name = $mysqli->real_escape_string($name);

 $calc  = "SELECT * FROM url WHERE name ='$name' ";

 $calc1 = $mysqli->query($calc);

 $calc2 = $calc1->fetch_assoc();
 
 $delete = "deletefile.php?type=".$type."&name=$name&id=$id";


echo "<div style = 'margin-left:2%; margin-right:2%; font-size:1.5em; background-color:blue; color:white;  display:flex;  width:1OO%; justify-content:space-around;  margin-bottom:1%;'>";

echo "<div>";
echo "type:";
echo $type; 
echo "</div>";

echo "<div style = 'display:flex; justify-content:space-around'>";

echo "name:";

echo "<a href = '$lien' id = 'b'>"; echo $name; echo "</a>";


echo "</div>";


echo "<div style = 'display:flex; justify-content:space-between;'>";

echo "<div> date de creation: </div>";

echo "<div>";
echo $jour."/".$mois."/".$anner;
echo "</div>";

echo "</div>";

echo "<div>";

echo "date de fin:"; echo substr($calc2['date'], 0, 2); echo "/"; echo substr($calc2['date'], 2, 2); echo "/"; echo substr($calc2['date'], 4, 2);

echo "</div>";

echo "<div>";

echo "&nbsp; &nbsp"; echo "<a href = '$delete' >"; echo "supprimer"; echo "</a>";

echo "</div>";

echo "</div>";

 
}

}

?>

