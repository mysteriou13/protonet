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

$terra =  "https://terraliberta.vecchionet.com/index.php";

}


if(empty($_SESSION['pseudo'])){

include("./servicepremium.php");

}else{

include("./premium.php");

$terra = $terra."?pseudo=".$pseudo;

}

?>

<div  style = "border-radius:20px; background-color:blue; padding:2%;">

<img src = "./image/terraliberta.png"/ style = " height:auto; max-width:99%; "> 

</div>

<iframe id = "terra" src = "<?php echo $terra;?>" style = " border:1px solid cyan; height:100%; width:100%;">

</iframe>


</body>
</html>


