<html>
<body>

<?php 

$d = "corsicanet";

$des1 = "cliquer pour agrandir";

 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>

<?php 

include("./head.php");

include("./header.php");

$mode = htmlspecialchars($_GET['mode']);

?>



<div id = "forminscription">
<center>
<?php 

include_once('forminscription.php');

?>
</center>
</div>

</body>
</html>



