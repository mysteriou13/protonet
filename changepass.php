<html>
<body>
<?php 
include_once("head.php");

include_once("header.php");


?>

<div id = "b" style = "font-size:2em; margin-top:1em; ">

<center>

 changer de mot pass

<form action = "<?php $_SERVER['PHP_SELF']?>" method  = "POST">

nouveau  mot de pass<input type  = "password" name = "newpass">

</br>

confirm mot de pass<input type = "password" name = "confirpass">

</br>

<input type = "submit" value = "envoyer">
</form>

</center>

</div>

</body>
</html>
