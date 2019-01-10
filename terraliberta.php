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

$terra = null;


if($_SERVER['SERVER_NAME'] == "localhost"){

$terra = "http://localhost/terraliberta/";

}else{

$terra =  "https://terraliberta.vecchionet.com/";

}

?>

<div id = "b4">
<center id = "premium">
service r&eacute;serv&eacute; au utlisateur premium
</center>
</div>


<div>

<iframe id = "terra" src = "<?php echo $terra;?>" style = " border:1px solid cyan; height:100%; width:100%;">

</iframe>

</div>

</body>
</html>


