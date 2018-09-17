<html>
<body>
<?php
include_once("head.php");
include_once("header.php");
include_once("iframe.php");

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

$dis = "none";

}else{

$dis = "block";

}

?>

<div id = "b" style = "display:<?php echo $dis?>;font-size:2em; margin-top:2em; ">
<center>
service r&eacute;serv&eacute; au utlisateur premium
</center>
</div>

<div>

<iframe id = "terra" src = "<?php echo  url?>" style = " border:1px solid cyan; height:100%; width:100%;">

</iframe>

</div>

</body>
</html>


