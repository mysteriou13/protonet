<?php 
 include_once("head.php");
 include_once("header.php");
 include_once("iframe.php");

 $nameserver = $_SERVER['SERVER_NAME'];

 $paypal = "/terraliberta/paypal";

if(empty($_SESSION['pseudo'])){

 header('Location:index.php');

}

if($_SERVER['SERVER_NAME'] == "localhost" ){

 $u = "http";

}else{

 $u = "https";

}

$u = $u."://".$nameserver."/terraliberta/paypal/index.php";


?>


<iframe src = "<?php echo $u;?>" >

</iframe>
