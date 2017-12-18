<?php 
session_start();
?>

<html>
<body>
<?php 
include_once("hautepage.php");
?>

<div id = "conteneur2">

<center>

<form method = "post" style = "color:white;">


<label> un mois</label><input  type = "radio" name = "abo" value = "1">
<br>
<label> trois mois</label> <input type = "radio" name = "abo" value = "3">
</br>
<label>six mois</label><input type = "radio" name = "abo" value = "6">
</br>
<label>un ans </label><input type = "radio" name = "abo" value = "12">

<input type = "submit">
</center>

</input>

</form>

</div>

<?php
include_once("./footer.php");
 ?>
</body>
</html>

