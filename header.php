<header>
<?php

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

include_once("./connect/connect.php");

if(!file_exists("./connect/connect.php")){

echo "connect no existe";

}

$_SERVER['HTTP_HOST'];

$_SERVER['REQUEST_URI'];

$base = basename($monUrl);

$coloraccueil = null; 

$colorproduit = null;

$colorproduit1 = null; 

$support = null;

$colorcontact = null;

$colorinscription = null;

if($base == "protonet" or $base == "index.php"){

$coloraccueil =  "background-color:gray";

}

if($base == "commande.php"){

$colorproduit = "background-color:gray";

}

if($base == "contact.php"){

$colorcontact = "background-color:silver;";

}

if($base == "inscription.php"){

$colorinscription = "background-color:silver";

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

$block2 = 'block';

$block3 = 'block';

if(isset($_SESSION['pseudo'])){

$block1 = 'block';

$block2 = 'none';

$block3 = 'none'; 

}


$space = null;

if(isset($_SESSION['pseudo'])){

$space = 'space-between;';

}


?>
<div  style = "display: flex;  color:silver; ">

<h1>
vecchionet
</h1>

</div>


<div>

<div
style = "
width:auto;
color:silver; "
 >
<h2>

cr&eacute;ateur de siteweb pour pc tablette et telephone(En construction)

</h2>

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

<?php 

$index = htmlspecialchars("index.php");

?>

&nbsp; &nbsp;<a href = "<?php echo $index;?>" style = "color:white; <?php ?> font-size:2em;<?php 

echo $coloraccueil;

?>">accueil</a> 
</div>

<?php 

$inscription = htmlspecialchars("inscription.php");

?>

   <div style = "display:<?php echo $block2;?>">                                                                                          
                                                                                                
&nbsp; &nbsp;<a href = "<?php echo $inscription; ?>" style = "color:white; font-size:2em;<?php echo $colorinscription; ?>">inscription</a> 
</div> 

&nbsp; &nbsp;

<div>

<a style = "font-size:2em; color:white;" href = "offre.php">
offre web
</a>

</div>

&nbsp;&nbsp;
<?php 

$connection =  htmlspecialchars("connection.php");

?>

<div style = "display:<?php echo $block3; ?>;">

<a href = "<?php echo $connection;?>" style = "color:white; font-size:2em;">connection</a>

</div>

<?php 

$contact = htmlspecialchars("./contact.php");

?>

<div>

&nbsp; &nbsp;<a href = "<?php echo $contact;?>" style = "color:white; font-size:2em;<?php

?>">contact</a>
</div>

<?php 
$parametre = htmlspecialchars("./parametre.php#parametre2");
?>

<div style = "display:<?php echo $block1;?>;" >

<a href = './parametre.php#parametre2' style = 'color:white;

<?php

if(isset($parametre)){

echo "background-color:gray;";
}

 ?>


 font-size:2em;'> parametre </a>

</div>

<?php

$commande  = htmlspecialchars("./produit.php");

 ?>

<div style = "display :<?php echo $block1;?>" >

<a href = '<?php echo $commande;?>' style = 'color:white; font-size:2em;<?php echo $colorproduit ?>'> mes produits </a>

</div>
<?php 

$deconnection  = htmlspecialchars("./deconnection.php");

?>
<div style = "display :<?php echo $block1;?>">

<a href = "<?php echo $deconnection; ?>" style = "color:white; font-size:2em;"> deconnection </a>

</div>

<?php 

?>

<div>

</div>

</div>

<div style ="
display: flex;
flex-direction: column;
font-size:1em;
margin-left:40%;
">

</div>

</div>

</div>

</div>

</div>

<div
style = "
padding-top:2%;
margin-top:1%;
color:white;
";
>

<div style = 
"display:flex;

">

<div style = "
margin-left:2%;
">

<?php

$wrap = 90;

if(isset($_SESSION['pseudo'])){

$wrap = 300;

}

$text = "
<div style = 'font-size:1.5em;'>
Je mets toutes mes comptences et mon savoir faire pour  concevoir et entretenir votre image
           travers des  produits web unique et personnalisé.</br> Pour tous nos sites nous vous garantissons:
<p>
une securit&eacute; &agrave; 100%;
</p>

<p>
une assitance technique;
</p>

<p>
nous occupons de toutes les formalités d'hergement.
</p>
</div>

";
 
$newtext = wordwrap($text, $wrap, "\n");


if($base == "index.php" or $base == "protonet" or $base == "www.vecchionet.com" or $base == "vecchionet.com"){

echo $newtext;

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
<?php

if($base == "index.php" or $base =="protonet" or $base == "www.vecchionet.com"){
echo "display:block;";
}else{

echo "display:none";

}
?>
">

<div id = "design" style = "
font-size:2em;
display:flex;
flex-wrap:wrap;
justify-content:space-around;
">

<div onclick = "
document.location = 'index.php#site1';
"
>
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
