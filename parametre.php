<html>
<body>

<?php 

include_once("head.php");

include_once("header.php");

$email = $_SERVER['PHP_SELF']."?email=1";

$e = new email();

if(empty($_SESSION['pseudo'])){

header("Location:index.php");

}

?>


<div id ="listebutton"> <div> <button id="b4">parametre</button></div> <div><button id ="b4"> compte nextcloud</button> <div> </div>

</br>
<div id ="b3">
<div>

<center>
parametre
</center>

</div>
</br>

  <div>
<?php 


$select = "SELECT * FROM membre WHERE pseudo = '$pseudo'";

$select1 = $mysqli->query($select);

$select2 = $select1->fetch_assoc();



?> 

<center>
pseudo : <?php echo $select2['pseudo']?>
</center>

</div>

</br>

<div >
<center>
email : <?php echo $select2['email']?> etat: 
<?php 


$verif =  $select2['verifemail']; 

if($verif == 0){

echo "non verfi&eacute; &nbsp;"."<a href ="."'".$email."'"." style = 'color:white'>verifier email</a>";



if(isset($_GET['email']) && !empty($_GET['email'])){

$length =  rand(10, 50);

$token = bin2hex(random_bytes($length));


$link ="http://vecchionet.com.terraliberta/membre/verifemail.php/?email=$token";

$message = "pour confirmé votre adress mail copier  dans votre navigateur web : :".$link;

$e->envoiemail($select2['email'],"confirmation email",$message,"massanthony@vecchionet.com");



}

}

if($verif == 1){

echo "verfi&eacute;";

}
?>
</center>
</div>
</div>

<script src= "./javascript/parametre.js"> </script>
</body>
</html>
