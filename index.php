<html>
<body>


<?php 
session_start();

  ini_set('display_errors', 1);

$d = "corsicanet";

$des1 = "cliquer pour agrandir";

 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>

<?php 

include("./head.php");

include("./header.php");

include("./presentation.php");

?>
</body>
</html>
<script>

document.getElementById("lien").style.color= "grey";
</script>

