 <?php

 include("../admin/connect.php");

 include("./delete.php");
 
 include("./date.php");

$affichedate = new affichedate();
 
$date = null;

$name = null;

$jour = date("d");

$mouth = date("m");
 
$year = date("y");

$datelink = "SELECT * FROM calc";

$datelink1 = $mysqli->query($datelink);


while($datalink2 = $datelink1->fetch_assoc()){

$name = $datalink2['name'];

$name = $mysqli->real_escape_string($name);

$date = $datalink['date'];

$url = "SELECT * FROM url WHERE url like '%$name%'";

$url1 = $mysqli->query($url);

$url2 = $url1->fetch_assoc();

$linkday = $affichedate->getjour($date);

$linkmouth = $affichedate->getmois($date);

$linkyear = $affichedate->getanner($anner);

if($day > $linkday){
if($linkmouth ==  $mouth){
if($linkyear == $year){
if($url2['type'] == "calc"){

$deletefile->deletecalc($name);



}
}

if($url2['type'] == "pad"){

$deletefile->deletepad($store,$name);

}

$deletefile->deletcalc($name);

$deletefile->deleteurl($name,$connect);
 
}
}

}

?>

