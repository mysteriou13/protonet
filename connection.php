<?php 

session_start();

?>
<html>
<body>

<?php 

include_once("./hautepage.php");

?>

<div id = "contact">
<?php 

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

header("location:index.php");

}

include_once("./formlogin.php");

?>
</div>

<?php 

include("./footer.php");

?>

</body>
</html>
