<html>
<body>

<?php 

include_once("head.php");

include_once("header.php");

$email = $_SERVER['PHP_SELF']."?email=1";


if(empty($_SESSION['pseudo'])){

header("Location:index.php");

}

?>

<div id= "b" >

<div style = "font-size:2em;">
<center>

<a href = "parametre.php">parametre</a>
&nbsp;&nbsp;

<a href = "paypal.php"> abonement</a>

</center>
</div>

</div>
</br>

  <div id = "b">
<?php 


$select = "SELECT * FROM membre WHERE pseudo = '$pseudo'";

$select1 = $mysqli->query($select);

$select2 = $select1->fetch_assoc();



?> 

<div  class = "divcadre">
<center>

<div>
<label>
pseudo : <?php echo $select2['pseudo']?>
</label>

<div>

</div>

<div >
<label>
email : <?php echo $select2['email']?> etat: 

<?php 

$verif =  $select2['verifemail']; 

if($verif == 0){

echo "non verfi&eacute; &nbsp;"."<a href ="."'".$email."'"." style = 'color:white'>verifier email</a>";



if(isset($_GET['email']) && !empty($_GET['email'])){

$length =  rand(10, 50);

$token = bin2hex(random_bytes($length));


$link ="http://vecchionet.com/terraliberta/membre/verifemail.php/?email=$token";

$message = "pour confirmé votre adress mail copier  dans votre navigateur web : :".$link;

$e->envoiemail($select2['email'],"confirmation email",$message,"massanthony@vecchionet.com");



}

}

if($verif == 1){

echo "verfi&eacute;";

}
?>
<label>
</center>
</div>


</div>
  </div>

</body>
</html>
