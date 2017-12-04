
<html>
<?php 
session_start();
$d = "parametre";
$parametre = "p";
include_once("./head.php");

?>
<body>
<?php

include_once("./header.php");

 ?>

<div id = "parametre2">

</div>

<div>

<div id  ="parametre">

<p id = "parametre1">
Parametre du compte:
</p>

<p id = "parametre1">
pseudo:&nbsp;&nbsp; <?php  echo $_SESSION['pseudo']?>
</p>

<div id = "parametre1">
email:&nbsp;&nbsp; <?php  echo $row['email'];?>&nbsp;&nbsp;etat:
<?php 
if($row['verifemail'] == 0){
echo "<a href ='verfiemail.php' style = 'color:white'> non verifi&eacute; </a>";

}else{

echo "verifi&eacut;";

}

?>
</div>

</div>

</body>

</html>

