<html>
<body>
<?php
include_once("hautepage.php");
include_once("./email.php");
?>

<div id = "conteneur2">

<center>

<form  method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">

<input type = "text" name  = "email">

<input type = "submit">

<?php

if(isset($_POST['email']) && !empty($_POST['email'])){


}
 ?>

</form>


</center>

</div>

<?php 
include_once("footer.php");
?>

</body>
</html>

