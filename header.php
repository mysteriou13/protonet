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


$url = str_replace("vecchionet.com",1,$domaine);

$pseudo = null;

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

}


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


<div class = "divflex" >


<div   class = "divheader">
<a  href = "index.php">
accueil
</a>
</div>


<?php 

if(!isset($_SESSION['pseudo']) ){

include("divinscription.php");

}

?>

<div  class = "divheader">
<?php


if($mobile == true){

$service = "vecchiocloud.php";


}else{
$service = "vecchiocloud.php";
}


?>
 <a id  href = '<?php echo $service; ?>'>
nextcloud
</a>

</div>



<div class  = "divheader">

  <a   href = 'CGU.php'>
CGU
</a>


</div>




<div class = "divheader">

   <a   href ='legal.php'>
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


</header>
