<?php

session_start();

include_once("/var/www/html/vecchionet.com/mail.php");

include_once("/var/www/html/admin/connect.php");

   $ua = $_SERVER['HTTP_USER_AGENT'];
   $mobile = null;
   $dismobile = "none";
if (preg_match('/iphone/i',$ua) || preg_match('/android/i',$ua) || preg_match('/blackberry/i',$ua) || preg_match('/symb/i',$ua) || preg_match('/ipad/i',$ua) || preg_match('/ipod/i',$ua) || preg_match('/phone/i',$ua) )
{
$mobile = true;
$dismobile = "block";
}else{
$mobile  = false;
$dismobile = "none";
}


$e = new email();

$domaine =  $_SERVER['SERVER_NAME'];

$url = str_replace("vecchionet.com",1,$domaine);

$pseudo = null;

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

}

$domaine =  $_SERVER['SERVER_NAME'];

$protocole = null;

$page = null;

$localhost = null;

$display = null;

$none = null;

$admin = "../admin/connect.php";

$mode = htmlspecialchars($_GET['mode']);

$base =  basename($_SERVER['PHP_SELF']);

if($domaine == "localhost"){

$localhost = 1;

$protole = "http://";

$domaine = $domaine."/vecchionet.com/";

}else{

$domaine = "vecchionet.com/";

$protole = "https://";

$localhost = 0;

}

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){
if($mode == "premium"){

header("Location:paypal.php");

}
}

include($admin);

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

$display = "block";

$none = "none";

}else{

$none = "block";

$display = "none";

}



$link = $protole.$domaine;

$terra =  str_replace("vecchionet.com","",$link);

$terra = str_replace("localhost//","localhost/",$terra);

$terraliberta = $terra."/terraliberta";

?>


 
<header>
<div >

<h1>
<center>
<u>vecchionet.com</u>

</br>
 le cloud  respectueux de la  vie priv&eacute;
</h1>

</center>


<div class = "divflex">


<div   class = "divheader">
<?php 

$page = "./index.php";

if($mobile == true){

$page = $page."#index";

}

?>
<a  href = "<?php echo  $page; ?>">
accueil
</a>
</div>


<?php 

if(!isset($_SESSION['pseudo']) && $url == 1 or  $localhost == 1 && !isset($_SESSION['pseudo']) ){

include("divinscription.php");

}

?>

<div  class = "divheader">
<?php


if($mobile == true){

$service = "vecchiocloud.php#service";


}else{
$service = "vecchiocloud.php";
}


?>
 <a id  href = '<?php echo $service; ?>'>
vecchiobox
</a>

</div>



<div class  = "divheader">

<?php 

if($mobile){

$page = "CGU.php#CGU";


}else{

$page = "CGU.php";

}

?>

  <a   href = '<?php echo $page;?>'>
CGU
</a>


</div>




<div class = "divheader">

<?php 


if($mobile == true ){

$page = "legal.php#legal";

}else{

 $page = "legal.php";

}

?>

   <a   href ='<?php echo $page;?>'>
mention legal
</a>

</div>

<div class = "divheader">

<?php 

if($mobile == true){
$page = "contact.php#contact";

}else{
$page = "contact.php";

}

?>

<a href = "<?php echo $page?>"> contact </a>

</div>

<div class = "divheader">
<a href = "faq.php"> faq </a>
</div>

<?php 
if(isset($_SESSION['pseudo'])){

include("divmembre.php");

}
?>
</div>
<div id = "inscription" >
<?php 

if(!isset($_SESSION['pseudo']) && $base != "terraliberta.php"){

include_once("formconnection.php");

}


?>



</header>



