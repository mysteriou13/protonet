<html>
<body>
<?php
session_start();

include("head.php");

include("header.php");

include("divlistement.php");

?>


<div>
<center style  = "font-size:2em; margin:1em">

<div style= "display:<?php echo $display;?>">
<strong id = "b">

liste des documents

</strong>
</br>

</center>

</div>


<div id = "ongletliste" style = "  margin-left:2%; display:flex;">

<div id= "ongletpad" style = "display:<?php echo $display?>; color:white; padding:0%; font-size:1.5em;  margin-right:0.5%; solid white; background-color:blue ;">

pad

</div>

<div id= "ongletcalc" style = "display:<?php echo $display;?>; color:white; padding:1%; font-size:1.5em;  background-color:darkblue">
calc
</div>

</div>


<div  id = "listcalc"style ="display:none;">

<?php

 listdiv($mysqli,"calc");

?>

</div>

<div id  = "listpad" style = "display:block;">
<?php 

 listdiv($mysqli,"pad");

?>

</div>

</body>
</html
