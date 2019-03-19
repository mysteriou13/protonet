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
vecchionet
</br>
hebergeur de service libre  et etique corse 
</center>
</h1>


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

if(isset($_SESSION['pseudo'])){

include("divmembre.php");

}

if(!isset($_SESSION['pseudo'])){
include("divservice.php");
}

?>

<div class  = "divheader">

<?php 
$page = "CGU.php";

  if($localhost == 0){

$page = "/".$page;

}


$link1 = $link.$page;

?>

  <a   href = '<?php echo $link1;?>'>
CGU
</a>


</div>


<div class = "divheader">

<?php 

 $page = "soutenir.php";

 if($localhost == 0){

$page = "/soutenir.php";

}


$link1 = $link.$page;


?>
 <a  href = '<?php echo $link1; ?>'>
soutenir
</a>


</div>



<div class = "divheader">

<?php 

 $page = "legal.php";

if($localhost == 0){

$page = "/legal.php";

}


$link1 = $link.$page;


?>

         <a   href ='<?php echo $link1;?>'>
mention legal
</a>

</div>

<div class = "divheader">

<a href = "contact.php"> contact </a>

</div>

<div class = "divheader">
<a href = "faq.php"> faq </a>
</div>

</div>

<div id = "inscription" >
<?php 

if(!isset($_SESSION['pseudo']) && $base != "terraliberta.php"){

include_once("formconnection.php");

}


?>



</header>


<center>
<div>
  <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>

</div>
</center>


