<html>
<body>

<?php 
include_once("head.php");
include_once("header.php");

$calc = htmlspecialchars($_GET['pad']);
$link = "https://etherpad.vecchionet.com/p/".$_GET['pad'];

?>



<iframe src = '<?php echo  $link ?>' >

</iframe>



</body>
</html>
