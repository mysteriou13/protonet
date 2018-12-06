<html>
<body>

<?php 

include_once("head.php");

include_once("header.php");

?>

<h1 id= "b" style = "font-size:2em">

<center>
parametre
</center>

</h1>

  <div id = "b">
<?php 
$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

$select = "SELECT * FROM membre WHERE pseudo = '$pseudo'";

$select1 = $mysqli->query($select);

$select2 = $select1->fetch_assoc();



?> 

<div style = "display:flex; justify-content:center; font-size:2em; ">

<div>
pseudo : <?php echo $select2['pseudo']?>
<div>

</div>

<div >
email : <?php echo $select2['email']?> etat: 

<?php 

$verif =  $select2['verifemail']; 

if($verif == 0){

echo "non verfi&eacute;";

}

if($verif == 1){

echo "verfi&eacute;";

}


?>
</div>


</div>
  </div>

</body>
</html>
