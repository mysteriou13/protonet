<html>
<body>
<?php
  
include_once("head.php");
include_once("header.php");

$type = "calc";

$idcalc = htmlspecialchars($_GET['calc']);

$url = "https://ethercalc.vecchionet.com/";

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

