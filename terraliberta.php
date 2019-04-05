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

<div style = "display:flex;">

<div style = "width:50%;">

<iframe id = "terra" src = "<?php echo $terra;?>" >

</iframe>

</div>


<div  style = "
<?php

if(!empty($_SESSION['pseudo'])){

echo "display:none;";

}

echo" border-radius:20px; background-color:blue; padding:2%";

?>
">

<img src = "./image/terraliberta.png"/ style = " height:auto; width:100%; "> 
</div>

</div>

</body>
</html>


