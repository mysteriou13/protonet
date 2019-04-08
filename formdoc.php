
 <form action = "<?php $_SERVER['PHP_SELF']?>" method = "POST">

  <strong>
 
<p class = "p1">
  Creér un <?php echo $type; echo "&nbsp;"; echo $durer ?>  
  </p>

     </strong>


 <p class = "p1">
nom du <?php echo $type;?> <input name = "<?php echo $type;?>" type = "text">
 </p>

<p>
<?php 

if(isset($_POST[$type]) && !empty($_POST[$type])){
if($name2['name'] == 1){

echo "nom  du document existe déja";

}

}

?>
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

<?php 

$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

$name = null;

$lien = null;

$fin = null;

$nb = "SELECT COUNT(*)id  FROM url WHERE pseudo = '$pseudo'";

$nb1 = $mysqli->query($nb);

$nb2 = $nb1->fetch_assoc(); 

$nblien =  $nb2['id']+1;

$nblien = $pseudo.$nblien;

$nomlien = $nb2['id'];

$jour = $mysqli->real_escape_string(date("d"));

$mois = $mysqli->real_escape_string(date("m"));

$anner = $mysqli->real_escape_string(date("y"));


if(isset($_POST[$type]) && !empty($_POST[$type]) ){


$name = $mysqli->real_escape_string($_POST[$type]);

if($type == "pad"){

$type = "pad";

$lien = "https://etherpad.vecchionet.com/p/".$nblien;


}

if($type == "calc"){

$type = "calc";

$lien = "https://ethercalc.vecchionet.com/".$nblien;

}

$fin = date("dmy",strtotime($_POST['pad']));


$name = $mysqli->real_escape_string($name);

}


$fin = $mysqli->real_escape_string($fin);

$lien = $mysqli->real_escape_string($lien);

$type =  $mysqli->real_escape_string($type);

echo $u = 'INSERT INTO url  VALUES(NULL,"'.$pseudo.'","'.$lien.'","'.$name.'","'.$type.'","'.$jour.'","'.$mois.'", "'.$anner.'","'.$fin.'")';

$verif = "SELECT COUNT(*)name FROM url WHERE pseudo = '.$pseudo.' && name = '.$name.'";

$verif1 = $mysqli->query($verif);

$verif2 = $verif1->fetch_assoc();

if(isset($_POST[$type]) && !empty($_POST[$type]) ){

if($verif2['name'] == 0){

header("Location:affiche.php?lien=$lien");


//$mysqli->query($u);

}

}

?>
