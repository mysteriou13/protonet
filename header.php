<header>
<?php

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$connect =  mysqli_connect("localhost","root","elio13790","corsicanet");

$_SERVER['HTTP_HOST'];

$_SERVER['REQUEST_URI'];

$base = basename($monUrl);

$coloraccueil = null; 

$colorproduit = null;

if($base == "corsicanet" or $base == "index.php"){

$coloraccueil =  "background-color:silver";

}

if($base == "commande.php"){

$colorproduit = "background-color:silver";

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

background-image: url(<?php echo  $image;?>); background-repeat:no-repeat;  background-size: 15%; 100%;
margin-right: auto;
margin-bottom:20px;
width: 600px;
height:100%;


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
style = " color:silver; font-size:2em; margin-left:20%;"
 >

cr&eacute;ation de site web 

</div>

</div>

</div>

</div>

<div style = "color:white; font-size:2em; display:<?php echo $block1;?>">
bonjour <?php echo $_SESSION['pseudo'];?>
</div>

<div
style = "
display:flex;
width:98%;
color:white;
";
>


<div style = "
width:80%;
display:flex;

justify-content:space-around;
">

<div>

&nbsp; &nbsp;<a href = "http://localhost/corsicanet/index.php" style = "color:white; font-size:2em;<?php 

if(isset($_SESSION['pseudo'])){

echo $coloraccueil;

}

?>"> accueil</a> 
</div>

<?php 

include_once("./menupresentation.php");

?>


<div style = "display:<?php echo $block1;?>;" >

<a href = './parametre.php' style = 'color:white;

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

</div>

  
<div style = "

margin-left:auto;";>

<?php 

$login = "./formlogin.php";

?>

</div>

<?php 

$login = "./formlogin.php";

if(!file_exists($login)){

$login = "../formlogin.php";

}

if(!isset($_SESSION['pseudo'])){

include_once($login);

}

?>

</div>

</div>

</header>

