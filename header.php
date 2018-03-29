<header>
<?php

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

 $mysqli = new mysqli("localhost", "root", "elio13790", "framadate");
if ($mysqli->connect_errno) {
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
<div  style = "display: flex;  color:white;">

<h1>
vecchionet
</br>
hebergeur de service libre  et etique corse

</h1>

</div>


<div style = "
color:silver;
font-size:2em;
display:flex;
justify-content:space-around;">

<div>

<a href = "index.php" style = "color:white;"> accueil </a>

</div>

<div>

<a href = "listservice.php" style = "color:white">liste des services </a>

</div>


<div>

<a href = "CGU.php" style = "color:white;"> CGU</a>

</div>

<div>
<a href = "legal.php" style = "color:white"> mention légal </a>
</div>

</div>

</header>

