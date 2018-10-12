
<?php

include_once("./install/connect.php");

include_once("mail.php");

$e = new email();

session_start();

$domaine = $_SERVER['SERVER_NAME'];

$protocole = null;

$page = null;

$localhost = null;

$display = null;

if($domaine == "localhost"){

$admin = "http://localhost/admin/connect.php";

include($admin);

}else{


}

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

$display = "block";

}else{

$display = "none";

}

if($domaine == "localhost"){

$localhost = 1;

$protole = "http://";

$domaine = $domaine."/vecchionet.com/";

}else{

$protole = "https://";

$localhost = 0;

}

$link = $protole.$domaine;

$terra =  str_replace("vecchionet.com","",$link);

$terra = str_replace("localhost//","localhost/",$terra);

$terraliberta = $terra."/terraliberta";


$link1  = $link;


?>


<header style = "background-color:DarkBlue;">
<div  style = "">

<h1 style = "color:white; font-size:2em;">
<center>
vecchionet
</br>
hebergeur de service libre  et etique corse 
</center>
</h1>


<div style = "
font-size:2em;
display:flex;
justify-content:space-between;
flex-wrap: wrap;
">


<div style = " display:flex; justify-content:space-around;  width:100%; ">

<div >
<?php 

$page = "index.php";

if($localhost == 0){

$page = "/index.php";

}

$link1 = $link.$page;

?>
<a id = "b"  href = "<?php echo  $link1; ?>">
accueil
</a>
</div>


<?php 

if(!isset($_SESSION['pseudo'])){

include("divinscription.php");

}


?>

<div>
<?php

$service = "listservice.php";

$page = $service;

if($localhost == 0){

$page = "/".$service;


}

$link1 = $link.$page;
?>
  <a id = "b"  href = '<?php echo $link1; ?>'>
liste des service
</a>

</div>

<div>

<a id = "b" href = 'terraliberta.php'>terraliberta </a>

</div>

<div>

<?php 
$page = "CGU.php";

  if($localhost == 0){

$page = "/".$page;

}


$link1 = $link.$page;

?>

      <a id = "b"  href = '<?php echo $link1;?>'>
CGU
</a>


</div>


<div>

<?php 

 $page = "soutenir.php";

 if($localhost == 0){

$page = "/CGU.php";

}


$link1 = $link.$page;


?>
 <a id = "b" href = '<?php echo $link1; ?>'>
soutenir
</a>


</div>



<div>

<?php 

 $page = "legal.php";

if($localhost == 0){

$page = "/legal.php";

}


$link1 = $link.$page;


?>

         <a id = "b"   href ='<?php echo $link1;?>'>
mention legal
</a>

</div>


<div>


</div>
</div>
<?php

if(isset($_SESSION['pseudo'])){

include_once("divfichier.php");

include_once("divparametre.php");

include("divpremium.php");

}


  if(isset($_SESSION['pseudo'])){

include_once("divdeconnect.php");

}

?>
<div id = "inscription" style  = "margin-top:1em;  margin-bottom:1em;width:100%; ">

<?php 


if(!isset($_SESSION['pseudo'])){

include_once("forminscription.php");

}


?>

<div  id = "b" style = "margin-bottom:1em" >

<?php
$page =  $_SERVER['PHP_SELF'];

$index = substr_count($page, 'index.php');


if($index  == 1){

include("divindex.php");

}

?>



</div>


</header>

