<?php 
 include_once("head.php");
 include_once("header.php");
 include_once("iframe.php");

 $nameserver = $_SERVER['SERVER_NAME'];

 $paypal = "/terraliberta/paypal";

if($_SERVER['SERVER_NAME'] == "localhost" ){

 $u = "http";

}else{

 $u = "https";

}

$u = $u."://".$nameserver."/terraliberta/paypal/index.php";


?>


<iframe src = "<?php echo $u;?>" style = " border:1px solid cyan; margin-top:2%; height:100%; width:100%;">

</iframe>
