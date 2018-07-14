<?php 

 include_once("./vendor/predis/predis/autoload.php");

 include_once("./admin/connect.php");
try{

$redis = new redis();

$redis->connect("localhost");

$mysqli = new mysqli(server,login,password,database);

$select = "SELECT * FROM calc";

$ligne = $mysqli->query($select);

 $date = date("dmy",strtotime("- 1days"));

 $date = $mysqli->real_escape_string($date);

  
while($table = $ligne->fetch_assoc()){

$delete = "DELETE FROM calc WHERE date = $date";

 $key = "snapshot-".$table['name'];
 $datakey = $key."_formdata";

  $redis->del($key);
  $redis->del($datakey);

 if($table['date'] == $date){
 $mysqli->query($delete);
  
}

}
catch(Exception $e){

die($e->getMessage());

}

 

?>
