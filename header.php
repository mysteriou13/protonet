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

$base =  basename($_SERVER['PHP_SELF']);

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


<div class = "divflex">


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

if(isset($_SESSION['pseudo'])){

include("divmembre.php");

}

?>



<?php

if(!isset($_SESSION['pseudo'])){
include("divservice.php");
}

?>

<div  class = "divheader">
<?php 

$service = "terraliberta.php#premium";

$link1 = "http://localhost/terraliberta/";

if($localhost == 0){

$link1 = "https://terraliberta.vecchionet.com";

}



?>

<a id = "b" href = 'terraliberta.php'> premium </a>

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


}


if(isset($_SESSION['pseudo'])){

include_once("divdeconnect.php");

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


<center>
<div>
  <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>

</div>
</center>


