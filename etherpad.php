<html>
<?php 
include_once("head.php");
include_once("header.php");

$idcalc = htmlspecialchars($_GET['pad']);

$type = "pad";

$url = "https://etherpad.vecchionet.com/p/";

?>


 <div id = "b1">
<center>
<?php 
include_once("formdoc.php");
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

