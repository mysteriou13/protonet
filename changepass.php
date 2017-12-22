
<html>
<body>

<?php 

include_once("./hautepage.php");

?>

<div id = "conteneur2">

<form  method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>" style = "color:white; font-size:2em">
<center>
<label> change de mot pass</label>
</br>
<input type = "text" name = "pass">
</br>
<input type = "text" name = "confirpass">
</br>
<input type = "submit" >
</center>
</form>

</div>

<?php 

include_once("./footer.php");

?>

</body>
</html>

