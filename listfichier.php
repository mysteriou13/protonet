<html>
<body>
<?php
session_start();

include("head.php");

include("header.php");

?>


<div>
<center style  = "font-size:2em; margin:1em">

<div style= "display:<?php echo $display;?>">
<strong id = "b">

liste des documents

</strong>
</br>

</center>

</div>


<div id = "ongletliste" style = "  margin-left:2%; display:flex;">

<div onclick = "changebackgroundcolor('ongletpad','darkblue','blue')" id= "ongletpad" style = "display:<?php echo $display?>; color:white; padding:0%; font-size:1.5em;  margin-right:0.5%; solid white; background-color:darkblue ;">

pad

</div>

<div id= "ongletcalc" style = "display:<?php echo $display;?>; color:white; padding:1%; font-size:1.5em;  background-color:blue">
calc
</div>

</div>
 
<?php 


$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);


$list = "SELECT * FROM url WHERE pseudo = '$pseudo'";

$list2 = $mysqli->query($list);

$type = null;

$link = null;

$lien = null;

$name = null;

 while($liste3 = $list2->fetch_assoc() ){

echo "<div style = 'margin-left:2%; margin-right:2%; font-size:1.5em; background-color:blue; color:white;  display:flex;  width:1OO%; justify-content:space-around;  margin-bottom:1%;'>";

echo "<div style = ' padding-left:5%;width:100%;' >";
echo "type";
echo "</div>";

echo "<div style = 'width:100%;'>";
echo $liste3["type"]; 
echo "</div>";

echo "<div style = 'width:100%;'>";
$url = $liste3["url"];

echo "<a href = '$url' id = 'b'>"; echo $liste3["name"];echo "</a>";
echo "</div>";

echo "</div>";

 
}

?>


</body>
</html
