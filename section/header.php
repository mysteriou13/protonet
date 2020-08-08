<?php

session_start();

include_once("./section/mail.php");

include_once("../admin/connect.php");

$localhost = null; 

$e = new email();

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

<div class ="divheader" style = "display:none">

<a href="tarif.php"> tarif </a>

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

<?php 
if(isset($_SESSION['pseudo'])){

include("divmembre.php");

}

?>
</div>

</div>

<?php
if(!isset($_SESSION['pseudo'])){

include("formconnection.php");

}

?>



</header>
