<html>
<body>
<?php 
include_once("head.php");
include_once("header.php");

$calc = htmlspecialchars($_GET['calc']);
$link = "https://ethercalc.vecchionet.com/".$_GET['calc'];

?>



<iframe src = '<?php echo  $link ?>'  style = "background-color:white; margin-top:1%;  height:100%; width:100%;" >

</iframe>


