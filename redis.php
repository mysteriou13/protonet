 <?php

 include("/var/www/html/vecchionet.com/admin/connect.php");

 include("/var/www/html/vecchionet.com/delete.php");
 
 include("/var/www/html/vecchionet.com/date.php");

$affichedate = new affichedate();

$deletefile = new deletefile();
 
$date = null;

$name = null;

$day = date("d");

$mouth = date("m");
 
$year = date("y");

$datelink = "SELECT * FROM url";

$datelink1 = $mysqli->query($datelink);

while($datalink2 = $datelink1->fetch_assoc()){

$name = $datalink2['id'];

$name = $mysqli->real_escape_string($name);

$date = $datalink2['fin'];

$url = "SELECT * FROM url  WHERE id = '$name'";

$url1 = $mysqli->query($url);

$url2 = $url1->fetch_assoc();

$linkday = $affichedate->getjour($date);

$linkmouth = $affichedate->getmois($date);

$linkyear = $affichedate->getanner($date);

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

