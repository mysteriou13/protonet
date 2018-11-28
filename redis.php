
 <?php
 
  include("../admin/connect.php");

 
 
$redis = new Redis(); 
 
$redis->connect('127.0.0.1', 6379);

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

$url2 = $url1>fetch_assoc();

$linkday = substr($datalink2['date'],0,2);

$linkmouth = substr($datalink2['date'],2,2);

$linkyear = substr($datalink2['date'],4,2);

$id = $datalink2['id'];

$id = $mysqli->real_escape_string($id);

$deleteurl = "DELETE* FROM url WHERE url like '%$name%'"; 

$deletecalc = "DELETE * FROM calc WHERE name ='$name' ";

$deletestore = "DELETE * FROM store WHERE key like '%$name%'";

$file = $datalink2['name'];

$redis->delete($del1); 

if($day > $linkday){
if($linkmouth ==  $mouth){
if($linkyear == $year){
if($url2['type'] == "calc"){

 $del1 = "snapshot-".$file."_formdata";

 $del2 = "audit-".$file;

 $del3 = "log-".$file;

 $del4 = "snapshot-"$file;

 $redis->delete($del1);
 $redis->delete($del2);
 $redis->delete($del3);


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

