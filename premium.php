<html>
<body>
<?php 

include_once("head.php");

include_once("header.php");

$pseudo = $_SESSION['pseudo'];

if(empty($pseudo)){

echo '<meta http-equiv="refresh" content="0;url=index.php" /> ';


}

$pseudo = $mysqli->real_escape_string($pseudo);

$ebo = "SELECT * FROM ebo  WHERE pseudo = '$pseudo'";

$ebo1 = $mysqli->query($ebo);

$ebo2 =  $ebo1->fetch_assoc();

$abo = $ebo2["date"];

$date = date("dmy");


?>

<div id = "b" style = "font-size:2em; margin-top:2%;">

<?php 


$day = date("d");

$moth = date("m");

$year = date("y");

$dayabo = substr($abo,-2,2);

$mothabo = substr($abo,2,2);

$yearabo = substr($abo,4,2);

$time = substr($abo,-3);


if($mothabo <= 9){

$time2 = "0".$mothabo;
 
$mothabo = "0".$mothabo;

$abo = $time3;


}


?>

<center>
premium restant: 

<?php



if($yearabo >= $year){

echo $yearabo-$year."ans &nbsp;";

}

if($mothabo >= $moth ){

echo $mothabo-$moth."mois &nbsp;"; 

}



  if($dayabo >=  $day){

echo $dayabo-$day."jours &nbsp;";

}



?>

<a href = "modepremium.php"  style  = "color:white;">commander</a>

</center>

</div>

</body>
</html>
