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


<iframe  src = "<?php echo $terra;?>"  style = "height:100%; width:100%;">

</iframe>


</body>
</html>


