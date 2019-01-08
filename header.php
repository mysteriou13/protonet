<?php

include_once("/var/www/html/vecchionet.com/mail.php");

$e = new email();

$domaine =  $_SERVER['SERVER_NAME'];

$url = str_replace("vecchionet.com",1,$domaine);

session_start();

$domaine =  $_SERVER['SERVER_NAME'];

$protocole = null;

$page = null;

$localhost = null;

$display = null;

$none = null;

$admin = "../admin/connect.php";

$mode = htmlspecialchars($_GET['mode']);

if($domaine == "localhost"){

$localhost = 1;

$protole = "http://";

$domaine = $domaine."/vecchionet.com/";

}else{

$domaine = "vecchionet.com";

$protole = "https://";

$localhost = 0;

}

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){
if($mode == "premium"){

header("Location:modepremium.php");

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


<div style = "

display:flex;
justify-content:space-between;
flex-wrap: wrap;
">


<div  class = "divheader">
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

if(!isset($_SESSION['pseudo']) && $url == 1 or  $localhost == 1 && !isset($_SESSION['pseudo']) ){

include("divinscription.php");

}

?>

 <div  style = "background-color:blue; display:<?php echo $display;?>;border:2px solid white; border-radius:25px; font-size:1.5em;" >

<a id = "b" href = "pad.php">nouveau pad </a>

 </div>

<div  style = "display:<?php echo  $display?>; background-color:blue; border:2px solid white; border-radius:25px; font-size:1.5em;">

<a id = "b"  href = "calc.php"> nouveau tableur </a>

</div>

<div style = "display:<?php echo  $display?>; background-color:blue; border:2px solid white; border-radius:25px; font-size:1.5em;">
<a id = "b" href = "https://framadate.vecchionet.com/">sondage</a>
</div>

<div style = "display:<?php echo  $display?>; background-color:blue; border:2px solid white; border-radius:25px; font-size:1.5em;">
<a id = "b" href = "./edit.php">edition d'image</a>
</div>


<div style = "display:<?php echo  $display?>; background-color:blue; border:2px solid white; border-radius:25px; font-size:1.5em;">
<a id = "b" href = "https://kanboard.vecchionet.com">gestion de projet</a>
</div>



<div style = "display:<?php echo $none?>; background-color:blue; border:2px solid white; border-radius:25px;  font-size:1.5em;">
<?php

$service = "listservice.php#service";

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

<div  class = "divheader">
<?php 

$service = "terraliberta.php#premium";

$link1 = "http://localhost/terraliberta/";

if($localhost == 0){

$link1 = "https://terraliberta.vecchionet.com";

}



?>

<a id = "b" href = '<?php echo $link1;?>'>terraliberta </a>

</div>

<div class  = "divheader">

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


<div class = "divheader">

<?php 

 $page = "soutenir.php";

 if($localhost == 0){

$page = "/soutenir.php";

}


$link1 = $link.$page;


?>
 <a id = "b" href = '<?php echo $link1; ?>'>
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

         <a id = "b"   href ='<?php echo $link1;?>'>
mention legal
</a>

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

</div>

<div id = "inscription" style  = "margin-top:1em;  margin-bottom:1em;width:100%; ">

<?php 


if(!isset($_SESSION['pseudo']) && $url == 1 or $localhost == 1 && !isset($_SESSION['pseudo'])){

include_once("formconnection.php");

}


?>

</header>

<div style = " margin-bottom:1em" >

<?php
$page =  $_SERVER['PHP_SELF'];

$index = substr_count($page, 'index.php');


if($index  == 1){


}

?>

</div>

<center>
<div>
  <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>

</div>
</center>


