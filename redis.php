
 <?php

 include("../admin/connect.php");

 include("./delete.php");

 $deletefile = new deletefile();
 

$deletefile->deletecal('testa');

$date = date("dmy");

$day = substr($date,0,2);

$mouth = substr($date,2,2);
 
$year = substr($date,4,2);

$datelink = "SELECT * FROM calc";

$datelink1 = $mysqli->query($datelink);


while($datalink2 = $datelink1->fetch_assoc()){

$name = $datalink2['name'];

$name = $mysqli->real_escape_string($name);

$url = "SELECT * FROM url WHERE url like '%$name%'";

$url1 = $mysqli->query($url);

$url2 = $url1->fetch_assoc();

$linkday = substr($datalink2['date'],0,2);

$linkmouth = substr($datalink2['date'],2,2);

$linkyear = substr($datalink2['date'],4,2);

$id = $datalink2['id'];

$id = $mysqli->real_escape_string($id);

$deleteurl = "DELETE* FROM url WHERE url like '%$name%'"; 

$deletecalc = "DELETE * FROM calc WHERE name ='$name' ";

$deletestore = "DELETE * FROM store WHERE key like '%$name%'";

$file = $datalink2['name'];


if($day > $linkday){
if($linkmouth ==  $mouth){
if($linkyear == $year){
if($url2['type'] == "calc"){

$deletefile->deletecal($file);



}
}

if($url2['type'] == "pad"){

$store->query($deletstore);


}

$mysqli->query($deletecalc);
$mysqli->query($deleteurl);
 
}
}

}

?>

