 <?php

 include("../admin/connect.php");

 include("./delete.php");
 
 include("./date.php");

$affichedate = new affichedate();

$deletefile = new deletefile();
 
$date = null;

$name = null;

$jour = date("d");

$mouth = date("m");
 
$year = date("y");

$datelink = "SELECT * FROM calc";

$datelink1 = $mysqli->query($datelink);

$name = "1544023380";

$deletefile->deletecalc($name,$mysqli);


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

$deletefile->deletecalc($name,$mysqli);



}
}

if($url2['type'] == "pad"){

$deletefile->deletepad($mysqli,$store,$name);

}
}
}
}

?>

