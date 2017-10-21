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
<div style = "
color:white;
height:100%;
display:flex;
flex-direction:column;
">

<div>
<strong style = "color:white; font-size:2em">
formulaire  de contact
</strong>
</div>

<div style = "
display:flex;
justify-content: center;
">

<div>name</div> <input type = "text" name = "name">

</div>

<div style = "
display:flex;
justify-content: center;

">
 pseudo<input type = "text" name = "email">
</div>

<div style = "
height:100%;

">
message

<textarea name="textarea" style = "height:50%; width:50%">

</textarea>
</div>

<div>
<input type = "submit">
</div>

</div>

</center>

</form>

</div>

<?php 

include_once("footer.php");

?>

</body>
</html>
