<html>
<body>
<?php 
include_once("head.php");
include_once("header.php");

$link = htmlspecialchars($_GET['lien']);

?>



<iframe src = '<?php echo  $link ?>' >

</iframe>

</body>
</html>
