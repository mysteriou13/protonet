<?php

include_once("/var/www/html/vecchionet.com/mail.php");

$e = new email();

session_start();

$domaine =  "vecchionet.com";

$protocole = null;

$page = null;

$localhost = null;

$display = null;

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

}else{

$display = "none";

}



$link = $protole.$domaine;

$terra =  str_replace("vecchionet.com","",$link);

$terra = str_replace("localhost//","localhost/",$terra);

$terraliberta = $terra."/terraliberta";

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

display:flex;
justify-content:space-between;
flex-wrap: wrap;
">


<div style = " background-color:blue; border:2px solid white; border-radius:25px; padding:1%;  font-size:1.5em; margin:1%;">
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

<div style = " background-color:blue; border:2px solid white; border-radius:25px; padding:1%; font-size:1.5em; margin:1%;">
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

<div style ="background-color:blue; border:2px solid white; border-radius:25px; padding:1%;  font-size:1.5em; maring:1%;">

<?php 

$service = "terraliberta.php#premium";

$page = $service;

if($localhost == 0){

$page = "/".$service;


}

$link1 = $link.$page;


?>

<a id = "b" href = '<?php echo $link1;?>'>terraliberta </a>

</div>

<div style ="background-color:blue; border:2px solid white; border-radius:25px; padding:1%;  font-size:1.5em; margin:1%;">

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


<div style = "background-color:blue; border:2px solid white; border-radius:25px; padding:1%;  font-size:1.5em; maring:1%;">

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



<div style = " background-color:blue; border:2px solid white; border-radius:25px; padding:1%;  font-size:1.5em; margin:1%;">

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


if(!isset($_SESSION['pseudo'])){

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


