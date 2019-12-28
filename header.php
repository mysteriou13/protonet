<?php

session_start();

include_once("./mail.php");

include_once("../admin/connect.php");

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

 <a id  href = './vecchiocloud.php'>
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


<a href = "./contact.php"> contact </a>

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


</header>
