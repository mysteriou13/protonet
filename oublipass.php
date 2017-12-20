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

$email = htmlspecialchars($_POST['email']);

$email = $connect->real_escape_string($_POST['email']);

$e = "SELECT count(*)email FROM membre WHERE email = '$email'";

$e1 = $connect->query($e);

$e2 = $e1->fetch_assoc();

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

