<html>
<body>


<?php 
session_start();

$d = "corsicanet";

$des1 = "cliquer pour agrandir";

 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>

<?php 

include("./head.php");

include("./header.php");

?>


   <div style = "color:white">

<div id = "conteneur2">

<div style = "font-size:3em">
liste des services
</div>

</div>


<div id = "conteneur2">

<div>
<p style = "font-size:3em">
<a href = "http://vecchionet.com:4242/" target="_blank"  style = "color:white;"> framemo</a>
</p>
<p style = "font-size:2em">
tableau de post-it collaboratif
</p>
</div>

</div>


<div id = "conteneur2">

<div>
<p style = "font-size:3em">
<a href = "./framaestro/" target="_blank" style = "color:white;"> framestro</a>
</p>
<p style = "font-size:2em">

espace de travail  colaboratif

</p>
</div>

</div>

<div id = "conteneur2">
<p  style = "font-size:3em"><a href = "./kanboard-1.2.1" target="_blank" style = "color:white"> kanboard </a> </p>

<p style = "font-size:2em">
gestionaire de projet libre
</p>
</div>

 <div id = "conteneur2">
<p style = "font-size:3em">
<a href = "http://vecchionet.com/framavectoriel/svg-editor.html" target="_blank"  style = "color:white;">SVG-edit</a>
</p>
<p style = "font-size:2em">
logiciel d'&eacute;dition d'mages et de retouche de photo libre
</p>
</div>


<div id = "conteneur2">

<p style = "font-size:3em">
<a href = "http://vecchionet.com:/framadate" target="_blank"  style = "color:white;">framadate</a>
</p>
<p style = "font-size:2em">
organiser vos render-vous librement
</p>



</div>


</div>

</body>
</html>
