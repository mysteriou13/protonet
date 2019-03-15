<?php 
include("date.php");

$date  = new affichedate();

$pseudo = $_SESSION['pseudo'];

if(empty($_SESSION['pseudo'])){

echo '<meta http-equiv="refresh" content="0;url=index.php" /> ';


}

$pseudo = $mysqli->real_escape_string($pseudo);

$ebo = "SELECT * FROM ebo  WHERE pseudo = '$pseudo'";

$ebo1 = $mysqli->query($ebo);

$ebo2 =  $ebo1->fetch_assoc();

$abo = $ebo2["date"];

$date = date("dmy");


?>

</br>
<div id = "b3"  >
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

if($yearabo-$year >= 1){
echo $yearabo-$year."ans &nbsp;";
}

}

if($mothabo >= $moth ){

if($mothabo-$moth >= 1){

echo $mothabo-$moth."mois &nbsp;"; 

}

}



if($dayabo >=  $day){

if($dayabo-$day >= 1){

echo $dayabo-$day."jours &nbsp;";

}

}



?>

<a href = "paypal.php" >commander</a>

</center>

</div>

