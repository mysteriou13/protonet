<!DOCTYPE html>

<html>
<?php 
include("head.php");
?>
<body>
<?php 
include("header.php");
?>

<div   style = "margin-top:1%;padding:1%; 

<?php

if($mobile == 0){

echo "display:flex;";

}

?>
 ">

<div
<?php

if($mobile == 1){

echo 'id="b5"';

}else{

echo 'id="b4"';

}

?>
 style ="margin:1%; padding-left:2%;  border:3px solid white; border-radius:25px; 

<?php 

if($mobile == 0){

echo "width:50%";

}

?>

">



<strong>vecchiobox</strong> un service d'hebergement chiffr&eacute; de fichier synchronis&eacute;s entre vos ordinateurs, tablettes, mobiles

et que vous pouvez partager facilement avec vos contacts.

</div>


<div style = "width:100%;">

<img src ="./image/nextcloud.png"   style ="border-radius:25px; height:100%; width:100%;">

</div>




</div>

</body>
</html>

