<?php 


 include_once("./vendor/predis/predis/autoload.php");

 include_once("./admin/connect.php");


$redis = new redis();

$redis->connect("localhost");

$mysqli = new mysqli(server,login,password,database);

$select = "SELECT * FROM calc";

$ligne = $mysqli->query($select);

$date = date("dmy",strtotime("- 1days"));

$date = $mysqli->real_escape_string($date);

$pad = new mysqli(server,login,password,store);


while($table = $ligne->fetch_assoc()){

$date = $mysqli->real_escape_string($date);

$delete = "DELETE FROM `calc` WHERE date = $date";

 $name = $table['name'];

 $name = $pad->real_escape_string($name);
 
 $key = "snapshot-".$table['name'];
 $datakey = $key."_formdata";


  $redis->del($key);
  $redis->del($datakey);

if($table['date'] == $date){
 
$mysqli->query($delete);  

$pad1 = "SELECT * FROM  store";

$pad2 = $pad->query($pad1);

while($pad3 = $pad2->fetch_assoc()){

$key = $pad3['key'];

 $key = $pad->real_escape_string($key);

$nbkey = substr_count($key,$table['name']);

if($nbkey == 1){

$deletekey = "DELETE FROM `store` WHERE `store`.`key` = '$key' ";

$pad->query($deletekey);


}

}

}

}

?>
