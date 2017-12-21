
<html>
<body>

<?php 

include_once("./hautepage.php");

?>

<div id = "conteneur2">

<form  method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">

<input type = "text" name = "pass">
</br>
<input type = "text" name = "confirpass">
</br>
</form>

</div>

<?php 

include_once("./footer.php");

?>

</body>
</html>

