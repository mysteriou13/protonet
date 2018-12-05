<?php 


$date = date('dmy');

$time = time();

$fin = date("dmy", strtotime($idcalc));


$durer = htmlspecialchars($_GET['durer']);

$date = htmlspecialchars($date);

$link = htmlspecialchars(time());

$type = $mysqli->real_escape_string($type);

$fin = $mysqli->real_escape_string($fin);

$time = $mysqli->real_escape_string($time);


 $t = 0;

 $t1 = 5;


$calc = "SELECT COUNT(*)name FROM calc WHERE name = '$link'";

$calc1 = $mysqli->query($calc);

$calc2 = $calc1->fetch_assoc();


$calc3 = "SELECT * FROM calc WHERE date = '$link'";

$calc4 = $mysqli->query($calc3);

$calc5 = $calc4->fetch_assoc();


if($calc2['name'] == 1 && isset($_SESSION['pseudo'])){

$link = $link+1;

$link = $mysqli->real_escape_string($link);

}


 $url = $url.$link;

 $url = $mysqli->real_escape_string($url);


if(isset($_POST[$type]) && !empty($_POST[$type])){

$pseudo = $_SESSION['pseudo'];

$calc =  $_POST[$type];

$calc = $mysqli->real_escape_string($calc);

$type = $mysqli->real_escape_string($type);


$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);


$insert = 'INSERT INTO url VALUES(NULL,"'.$pseudo.'","'.$url.'","'.$calc.'","'.$type.'")'; 


$name = "SELECT COUNT(*)name FROM url WHERE pseudo = '$pseudo' && name = '$calc' ";

$name1 = $mysqli->query($name);

$name2 = $name1->fetch_assoc();


}

if($calc2['name'] == 0  && !isset($_SESSION['pseudo']) or isset($_POST[$type]) && !empty($_POST[$type]) && isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){
if($name2['name'] == 0){

$pseudo = $_SESSION['pseudo'];

if(isset($_POST[$type]) && !empty($_POST[$type])){

$calc =  $_POST[$type];

}else{

$calc = $link;

}

$calc = $mysqli->real_escape_string($calc);

$type = $mysqli->real_escape_string($type);


$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);


$insert = 'INSERT INTO url VALUES(NULL,"'.$pseudo.'","'.$url.'","'.$calc.'","'.$type.'")'; 


$name = "SELECT COUNT(*)name FROM url WHERE pseudo = '$pseudo' && name = '$calc' ";

$name1 = $mysqli->query($name);

$name2 = $name1->fetch_assoc();


$calc6 = 'INSERT INTO calc VALUES(NULL,"'.$fin.'","'.$link.'")';

$mysqli->query($calc6);

$mysqli->query($insert);



if($type == "calc"){

echo '<meta http-equiv="refresh" content="durée;URL=affichecalc.php?calc='.$link.'"> ';

}

if($type == "pad"){

echo '<meta http-equiv="refresh" content="durée;URL=affichepad.php?pad='.$link.'"> ';

}

 }

 }
?>
 
 <form action = "<?php $_SERVER['PHP_SELF']?>" method = "POST">

  <strong>
 
<p style = "font-size:2em;">
  Creér un <?php echo $type; echo "&nbsp;"; echo $durer ?>  
  </p>

     </strong>


 <p style = "font-size:1.5em">
nom du <?php echo $type;?> <input name = "<?php echo $type;?>" type = "text">
 </p>

 <p>
  <input type = "submit" value = "envoyer">
   </p>

 <p>
 <?php

 if(isset($name2['name2']) && !empty($name2['name2'])){
  if($name2['name'] == 1){

 echo "nom déja pris";

   }

 }
?>
  </p>
 </form>


