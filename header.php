<header>
<?php

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


$connect =   new mysqli("localhost","root","","corsicanet");

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

if(isset($_SESSION['pseudo'])){

$block1 = 'block';

$block2 = 'none';

}


$space = null;

if(isset($_SESSION['pseudo'])){

$space = 'space-between;';

}


?>
<div  style = "display: flex;  color:silver; font-size:3em">



vecchionet

</div>


<div>

<div
style = "
width:auto;
color:silver; 
font-size:1.5em;"
 >

cr&eacute;ateur de  site web anti gafam
(En Construction)


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

&nbsp; &nbsp;<a href = "./index.php" style = "color:white; <?php ?> font-size:2em;<?php 

echo $coloraccueil;

?>">accueil</a> 
</div>

   <div style = "display:<?php echo $block2;?>">                                                                                          
                                                                                                
&nbsp; &nbsp;<a href = "./inscription.php" style = "color:white; font-size:2em;<?php echo $colorinscription; ?>">inscription</a> 
</div> 


<div>

&nbsp; &nbsp;<a href = "./contact.php" style = "color:white; font-size:2em;<?php

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

<a href = './commande.php#commande' style = 'color:white; font-size:2em;<?php echo $colorproduit ?>'> mes produits </a>

</div>

<div style = "display :<?php echo $block1;?>">

<a href = "deconnection.php" style = "color:white; font-size:2em;"> deconnection </a>

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


if($base == "index.php" or $base == "protonet" or $base == "www.vecchionet.com"){

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

if($base == "index.php" or $base =="protonet" or $base == "http://www.vecchionet.com"){
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
