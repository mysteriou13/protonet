<html>

<?php
include("head.php");


?>

<body>

<?php 
include("./header.php");

if(empty($_SESSION['pseudo'])){

header("Location:index.php");

}



?>

<div id ="b4">
<form action ="<?php echo $_SERVER['PHP_SELF']?>" method ="POST">
<center>
<u>renouvelement compte nextcloud</u>
</center>
 
<center>
1 mois<input type ="radio" name = "1" value ="1">3mois <input type="radio" name ="1" value= "3"> 
6mois<input type ="radio" name ="1" value = "6"> 1ans<input type="radio" name ="1" value ="12">
 </center>

<center>
<button type="submit" id="b" > valider </button>
</center>

</form>

</div>



</body>
</html>
