<html>
<body>
<?php
  
include_once("head.php");
include_once("header.php");

$type = "calc";

$idcalc = htmlspecialchars($_GET['calc']);

$url = "https://ethercalc.vecchionet.com/";

?>

 <div id = "b1" >
<center>
<?php 
//include_once("formdoc.php");
?>
</center>


</div>

<?php
 
if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

echo "script>display('b1','block');</script>";

}else{

echo "<script>display('b1','none');</script>";


}

?>

</body>
</html>

