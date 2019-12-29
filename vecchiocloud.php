<!DOCTYPE html>

<html>
<?php 
include("head.php");
?>
<body>
<?php 
include("header.php");
?>

</br>

<div>

<center>
<a target= "_blank" href ="https://next.vecchionet.com"  class = "divheader">
connection a nextcloud
</a>
</center>

</div>

</br>

<div id = "nextcloud" class ="b5">
<div id = "textnextcloud" class = "b4";
<?php

if($mobile == 1){

echo 'id="b5"';

}else{

echo 'id="b4"';

}

?>
 style =" 

<?php 

if($mobile == 0){

echo "width:50%";

}

?>

">



<strong>nextcloud</strong> un service d'hebergement chiffr&eacute; de fichier synchronis&eacute;s entre vos ordinateurs, tablettes, mobiles

et que vous pouvez partager facilement avec vos contacts.

</div>


<div style = "width:100%;">

<img src ="./image/nextcloud.png"   style ="border-radius:25px; height:100%; width:100%;">

</div>


</div>

<script src = "./javascript/mobile.js"></script>

<script>

displaymobile(mobile,"flex","nextcloud");


</script>


</body>
</html>

