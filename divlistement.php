<?php 

function listdiv($mysqli,$type,$order){


$type = $mysqli->real_escape_string($type);

$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

$list = "SELECT * FROM url WHERE pseudo = '$pseudo' && type = '$type' ORDER BY id $order";

$list2 = $mysqli->query($list);

$type = null;

$link = null;

$lien = null;

$name = null;


while($liste3 = $list2->fetch_assoc() ){

 $url = $liste3["name"];

 $url = $mysqli->real_escape_string($url);

 $calc  = "SELECT * FROM url WHERE name ='$url' ";

$calc1 = $mysqli->query($calc);

$calc2 = $calc1->fetch_assoc();


echo "<div style = 'margin-left:2%; margin-right:2%; font-size:1.5em; background-color:blue; color:white;  display:flex;  width:1OO%; justify-content:space-around;  margin-bottom:1%;'>";

echo "<div>";
echo "type:";
echo $liste3["type"]; 
echo "</div>";

echo "<div style = 'display:flex; justify-content:space-around'>";

echo "name:";


echo "<a href = '$url' id = 'b'>"; echo $liste3["name"];echo "</a>";
echo "</div>";

echo "<div style = 'display:flex; justify-content:space-between;'>";

echo "<div> date de creation: </div>";

echo "<div>";
echo $liste3["jour"]."/".$liste3['mois']."/".$liste3['anner'];
echo "</div>";

echo "</div>";

echo "<div>";

echo "date de fin:"; echo substr($calc2['date'], 0, 2); echo "/"; echo substr($calc2['date'], 2, 2); echo "/"; echo substr($calc2['date'], 4, 2);

echo "</div>";

echo "</div>";

 
}

}

?>

