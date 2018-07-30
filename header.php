<?php

include_once("./install/connect.php");

session_start();

$domaine = $_SERVER['SERVER_NAME'];

$protocole = null;

$page = null;

$localhost = null;

if($domaine == "localhost"){

$localhost = 1;

$protole = "http://";

$domaine = $domaine."/vecchionet.com/";

}else{

$protole = "https://";

$localhost = 0;

}

$link = $protole.$domaine;

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

<div>
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

 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

<div>
<?php
 
$page = "listservice.php";

if($localhost == 0){

$page = "/listeservice.php";

}


$link1 = $link.$page;
?>
  <a id = "b"  href = '<?php echo $link1; ?>'>
liste des service
</a>

</div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div>

<?php 
$page = "CGU.php";

  if($localhost == 0){

$page = "/CGU.php";

}


$link1 = $link.$page;

?>

      <a id = "b"  href = '<?php echo $link1;?>'>
CGU
</a>


</div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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


 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div>
<?php 

if(isset($_SESSION['pseudo'])){

include_once("divdeconnect.php");

}

?>
</div>


<?php

if(isset($_SESSION['pseudo'])){

include_once("divfichier.php");

}

?>

<div id = "inscription" style  = "  margin-top:20px; display:flex;  justify-content: center; width:100%;">

<?php

if(!isset($_SESSION['pseudo'])){

include_once("forminscription.php");

}


 ?>

</div>


</header>

