<html>
<?php 
include_once("head.php");
include_once("header.php");

$idcalc = htmlspecialchars($_GET['pad']);

$type = "pad";

$url = "https://etherpad.vecchionet.com/p/";

$time = time();

$date = date('dmy');

$fin = date("dmy", strtotime($idcalc));

$mysqli = new mysqli(server,login,password,database);


$fin = $mysqli->real_escape_string($fin);

$time = $mysqli->real_escape_string($time);

 $t = 0;

 $t1 = 5;

$calc = "SELECT COUNT(*)name FROM calc WHERE name = '$time'";

$calc1 = $mysqli->query($calc);

$calc2 = $calc1->fetch_assoc();


$calc3 = "SELECT * FROM calc WHERE date = '$time'";

$calc4 = $mysqli->query($calc3);

$calc5 = $calc4->fetch_assoc();


if($calc2['name'] == 1){

$time = $time+1;

$time = $mysqli->real_escape_string($time);

}


 $calc = "SELECT COUNT(*)name FROM calc WHERE name = '$time'";

 $calc1 = $mysqli->query($calc);

 $calc2 = $calc1->fetch_assoc();


if($calc2['name'] == 0){

$calc6 = 'INSERT INTO calc VALUES(NULL,"'.$fin.'","'.$time.'")';

$mysqli->query($calc6);

}

$link = htmlspecialchars(time());

header("Location:affichepad.php?pad=$link");

?>


</html>

