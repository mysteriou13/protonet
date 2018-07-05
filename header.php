<header>
<?php

$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


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


<div  style = "color:white;">

<h1>
<center>
vecchionet
</br>
hebergeur de service libre  et etique corse
</center>
</h1>

</div>


<div style = "
color:silver;
font-size:2em;
display:flex;
justify-content:space-between;
flex-wrap: wrap;
">

<div>

<button id = "b" onClick="parent.location='index.php'">
accueil
</button>
</div>

<div>
  <button id = "b" onClick="parent.location='listservice.php'">                                                                   
liste des service
</button> 



</p>

</div>


<div>

      <button id = "b" onClick="parent.location='CGU.php'">
CGU
</button>

</div>

<div>

 <button id = "b" onClick="parent.location='soutenir.php'">
soutenir
</button>


</div>

<div>
         <button id = "b"  onClick="parent.location='legal.php'">
mention legal
</button>

</div>

</header>

