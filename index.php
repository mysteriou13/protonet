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

<div>

<center>

<div style = "background-color:white; margin-bottom:3%; padding-bottom:3%; ">

<div>
<p style = "font-size:2em;" >

des sites web:

</p>
<div style = "font-size:3em;">
mutlisupport
</div>

<div style = "
width:50%;
height:50%;
background-image:url(multisupport_footer.png);
background-repeat: no-repeat;
background-size :50%; 50%;
">


</div>

<div style = "font-size:3em;">
securis&eacute;
</div>

<div style = "
width:50%;
height:50%;
background-image:url(icone-securite.png);
background-repeat: no-repeat;
background-size :50%; 50%;

">

</div>

<div style = "font-size:3em;">
avec un support technique
</div>

<div style = "
width:50%;
height:50%;
background-image:url(support-technique_318-64401.jpg);
background-repeat: no-repeat;
background-size :50%; 50%;
";>

</div>
</div>
</div>

<div id = "site">
&nbsp;
<a href = "./index.php"> haut de la page </a>
</div>

<div id = "site1" style = "border:1px solid black; background-color:white; ">


<div id = "element"  alt="Description"  >

<?php 

include("./site1/index.php");

?>

</div>
</div>

<div>
<a href ="./index.php">haut de la page</a>
</div>

<div id = "site2" style = "border:1px solid black; background-color:white; margin:2%;">


<div id = "element"  >

<?php 

include("./site2/index.php");

?>

</div>

</div>

<div id = "site3" style = "border:1px solid black; background-color:white; margin:2%;">
<div id = "element" alt="Description"  >

<?php 

include("./site3/index.php");

?>

</div>
</div>

<div id = "site4" style = "border:1px solid black; background-color:white; margin:2%;">
<div id = "element"  alt="Description" >

<?php 

include("./site4/index.php");
?>

</div>
</div>

<div id = "site5" style = "border:1px solid black; background-color:white; margin:2%;">
<div id = "element"  alt="Description"  >
<?php 

include("./site5/index.php");

?>

</div>
</div>


<div id = "site6"  style = "border:1px solid black; background-color:white; margin:2%;">
<div id = "element"  alt="Description">

<?php

include("./site6/index.php");

 ?>

</div>
</div>

</center>

<?php 

include("footer.php");

?>

</body>
</html>

