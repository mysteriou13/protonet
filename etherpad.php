<html>
<?php 
include_once("head.php");
include_once("header.php");

$idcalc = htmlspecialchars($_GET['pad']);

$type = "pad";

$url = "https://etherpad.vecchionet.com/p/";

?>


 <div id = "b" style = "display:<?php echo $display?>">

<center>
<?php 
include_once("formdoc.php");
?>
</center>


</div>



</body>
</html>

