<header>
<?php

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$connect =  mysqli_connect("localhost","root","elio13790","corsicanet");

$_SERVER['HTTP_HOST'];

$_SERVER['REQUEST_URI'];

$base = basename($monUrl);

$coloraccueil = null; 

$colorproduit = null;

$colorproduit1 = null; 

$support = null;

if($base == "corsicanet" or $base == "index.php"){

$coloraccueil =  "background-color:silver";

}

if($base == "commande.php"){

$colorproduit = "background-color:gray";

}

$block = "none";

if(isset($_SESSION['pseudo'])){

$pseudo = $_SESSION['pseudo'];


$email = "SELECT  pseudo,pass,email,verifemail FROM membre WHERE pseudo = '$pseudo'";
$result = mysqli_query($connect, $email);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$admin1 = mysqli_query($connect,"SELECT count(*)admin FROM membre WHERE pseudo = '$pseudo'");

$admin2 = mysqli_fetch_row($admin1);

if($admin2[0] == 1){

$block = "block";

}


}

$image = "220px-The_GNU_logo.png";

if(!file_exists($image)){

$image = "../220px-The_GNU_logo.png";

}

$block1 = 'none';


if(isset($_SESSION['pseudo'])){

$block1 = 'block';

}

$space = null;

if(isset($_SESSION['pseudo'])){

$space = 'space-between;';

}


?>
<div  style = " display: flex;">

<div style = "

background-image: url(<?php echo  $image;?>); background-repeat:no-repeat;background-size: 15%; 100%;
margin-right: auto;
margin-bottom:20px;
width: 600px;
">


<div

style = "
color:silver;
font-size:5em;
padding-left:20%;
"

>

protonet

</div>

<div>
<div
style = "
color:silver; font-size:2em;"
 >

<center>
cr&eacute;ateur de  site web 
</center>

</div>

</div>

</div>

</div>


<div
style = "
color:white;
";
>


<div style = "
display:flex;
flex-wrap: wrap;

<?php 
if(isset($_SESSION['pseudo'])){

echo "justify-content: space-around;";

}

?>

">

<div>

&nbsp; &nbsp;<a href = "./index.php" style = "color:white; font-size:2em;<?php 


?>">accueil</a> 
</div>


<div>

&nbsp; &nbsp;<a href = "./contact.php#contact" style = "color:white; font-size:2em;<?php


?>">contact</a>
</div>

<div style = "display:<?php echo $block1;?>;" >

<a href = './parametre.php#parametre2' style = 'color:white;

<?php

if(isset($parametre)){

echo "background-color:gray;";
}

 ?>


 font-size:2em;'> parametre </a>

</div>

<div style = "display :<?php echo $block1;?>" >

<a href = './commande.php' style = 'color:white; font-size:2em;<?php echo $colorproduit ?>'> mes produits </a>

</div>

<div style = "display :<?php echo $block1;?>">

<a href = "deconnection.php" style = "color:white; font-size:2em;"> deconnection </a>

</div>

<div>

</div>

<div>


<div style ="
display: flex;
flex-direction: column;
font-size:2em;
margin-left:70%;
">

</div>

</div>

</div>

</div>

<div
style = "
padding-top:2%;
font-size:2em;
margin-top:1%;
color:white;
";
>

<div style = 
"display:flex;
justify-content: space-around;
">

<div style = "
margin-left:5%;
margin-right:5%;
padding-left:2%;
">
<?php

$wrap = 90;

if(isset($_SESSION['pseudo'])){

$wrap = 300;

}

$text = "Je mets toutes mes comptences et mon savoir faire pour  concevoir et entretenir votre image
         dans un monde toujours plus connecté nos produits sont tous garantie:
</br>
</b>         
<ul>
<li>
          navigation aussi agr&eacute;able , intuitif et rapide  sur pc tablette et telephone.
 </li>
 
<li>
   s&eacute;curis&eacute;: la s&eacute;curit&eacute; n'est pas luxe, elle primordiale.</br></br>
</li>

<li>
une assitance technique: vous ne serais jamais seul
</li>

</ul>      
";
$newtext = wordwrap($text, $wrap, "\n");

echo $newtext;
?>




</div>

<div>

<?php 

if(!isset($_SESSION['pseudo'])){
include("./formlogin.php");
}
?>

</div>

</div>

<div onclick = "
document.location = '#tarif';
"
style = "
display:flex;
justify-content:center;
";
>
</div>

<div style = "
">

<div id = "design" style = "
display:flex;
flex-wrap:wrap;
justify-content:space-around;
">

<div onclick = "
document.location = 'index.php#site1';
">
design1 
</div>

<div onclick = "
document.location = 'index.php#site2';
">
design2
</div>

<div onclick = "
document.location = 'index.php#site3';
">

design3

</div>

<div onclick = "
document.location = 'index.php#site4';
">

design4

</div>

<div onclick = "
document.location = 'index.php#site5';
">
design5
</div>


<div onclick = "
document.location = 'index.php#site6';
">
design6
</div>


</div>
</div>
</div>

</header>
<center>
</center>
