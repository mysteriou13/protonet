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

<div style = "color:white">

<div id = "conteneur2">

<div style = "font-size:3em">
liste des services
</div>

</div>


<div id = "conteneur2">

<div style = "font-size:3em">
framadate

</div>

</div>

<div id = "conteneur2" >

<div style = "font-size:3em">
framacalc

</div>

</div>


<div id = "conteneur2" >

<div style = "font-size:3em">
framaboard

</div>

</div>


<div id = "conteneur2">

<div style = "font-size:3em">
framapad

</div>

</div>

</div>
</div>

</body>
</html>

