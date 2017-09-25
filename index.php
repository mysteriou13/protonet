<html>
<body>

<?php 
session_start();

$d = "corsicanet";

include_once("./head.php");

include_once("./header.php");

include_once("./nav.php");


$des1 = "cliquer pour agrandir";

?>

<script>

var f = 0;

function conteneur(){

f = f+1;

if(f == 1){

document.getElementById("g").innerHTML = "reduire";
document.getElementById("c").style.display = "block";

}

if(f == 2){

  document.getElementById("g").innerHTML = "agrandir";


document.getElementById("c").style.display = "none";

}

if(f == 3){

document.getElementById("g").innerHTML = "reduire";


document.getElementById("c").style.display = "block";

f = 0;

}

if(f == 0){

f = f+1;

}


}


</script>
<div>

<center>


</br> 

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


<div id = "site1" style = "border:1px solid black; background-color:white; ">

<div id = "element"  alt="Description"  >

<?php 

include("./site1/index.php");

?>

</div>
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

<div id = "site6" onclick = "document.location ='./site6/index.php'" style = "border:1px solid black; background-color:white; margin:2%;">
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

