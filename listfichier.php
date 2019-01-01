<html>
<body>
<?php
session_start();

$order  = "ASC";

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

<div onclick = "affichediv(this.id)" id= "ongletpad" style = "display:<?php echo $display?>;   border-radius:20px 20px;  color:white; padding:0%; font-size:1.5em;  margin-right:0.5%; solid white; background-color:darkblue ;">

liste pad

</div>

<div onclick = "affichediv(this.id)" id= "ongletcalc" style = "display:<?php echo $display;?>; border-radius:20px 20px; color:white; padding:1%; font-size:1.5em;  background-color:blue">
liste calc
</div>

</div>
<div>

</div>
</br>

<div style = "display:flex">

<div>

<form  action = "<?PHP $_SERVER['PHP_SELF'];?>" method = "POST">

<input type = "submit" name = "ASC" >

</form>

</div>


<div>

<form action  = "<?PHP $_SERVER['PHP_SELF']?>" method = "POST">

<input type  = "submit" name = "DESC">

</form>

</div>


</div>


<div  id = "listongletcalc"style ="display:none;">

<?php

 listdiv($mysqli,"calc");

?>

</div>

<div id  = "listongletpad" style = "display:block;">
<?php 

 listdiv($mysqli,"pad");

?>

</div>
</div>

</body>
</html
