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

<div id = "contact">

<form>
<center>
<strong>

</strong>
</br>
<input type = "text" name = "name">
</br>
<input type = "text" name = "email">
</br>
<textarea name="textarea" style = "height:50%; width:50%">

</textarea>
</br>
<input type = "submit">
</center>

</form>

</div>

<?php 

include_once("footer.php");

?>

</body>
</html>
