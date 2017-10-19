<html>
<body>
<?php 
session_start();

$d = "corsicanet";

include_once("./head.php");

include_once("./header.php");

$des1 = "cliquer pour agrandir";

 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


$nb = mb_substr_count($monUrl, "#");


?>

<?php
include_once("./footer.php");
?>
</body>
</html>
