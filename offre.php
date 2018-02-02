<?php 
session_start();

$res = 0;


?>
<html>
<body>

<?php 

include("./hautepage.php");

include_once("./email.php");

?>

<div id = "contact" style = "">

<div style = " color:white; ">


<h1 style = "color:white;">

<center id = "connection1"> offre web</center>

</h1>

<h2>
<center>
30 euros/mois
</center>
</h2>

<h3>
<ul>
<p style = "text-align:left;">
<li>
un site adapter pour  pc tablette et telephone.
</li>
</br>
<li>
suivi tout long de la creation du site.
</li>
</br>
<li>
assitance techinique.
</li>
</br>
<center>

<div onclick = "
<?php

if(isset($_POST['site']) && !empty($_POST['site'])){



}

if(!isset($_SESSION['pseudo'])){

echo "document.getElementById('connection').style.display = 'block'; document.location = '#connection1'";

}else{

echo "document.getElementById('commande').style.display = 'block';  document.location = '#formcommande'";

}

?>
">

</div>

</center>

<?php 

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

$ins = "none";

}else{

$ins = "block";

}

?>

<div id = "connection" style = "display:<?php echo $ins?>">

<center>
connecter vous pour commander un site
</center>

<?php 
include_once("./formlogin.php");
?>

</div>

<?php 

$display = "none";

$diplayabo = "none";

if(isset($_SESSION['pseudo']) && ! empty($_SESSION['pseudo'])){

$display = "block";



}

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){
$pseudo = $_SESSION['pseudo'];
                                                                                                
$pseudo =  $connect->real_escape_string($pseudo);                                               
                                                                                                
$verif = "SELECT verifemail  FROM membre WHERE pseudo = '$pseudo'";
                                                                                                
$verif1 = $connect->query($verif);                                                              
                                                                                                
$verif2 = $verif1->fetch_assoc();

if($verif2['verifemail'] == 0){

$displayemail = "none";
$displayemail2 = "block";

}else{
$displayemail2 = "none";


$displayemail = "none";

$displayabo = "none";
$displayemail = "block";

}

}


?>



 <form enctype="multipart/form-data"  method="post" style = "display:<?php echo $display;?>" >

<div style = "
width:100%;
height:100%;
background-color:grey;
display: flex;
flex-direction: column;
align-items: center;


">

formulaire de precommande
<div>

<div>
type de produit(Obligatoire)
</div>

<div>
<input type= "radio" name="site" value="jour"> site vitrine
</div>


<div>
<input type= "radio" name="site" value="nuit"> boutique en ligne
</div>

<div>
<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
</div>

<div>
<input type= "radio" name="site" value="nuit"> autre
</div>

<div>
</br>
(photo,logo,tarif,etc...)<input type = "file" name = "picture">(format accept&eacute; 'jpg', 'jpeg', 'gif', 'png','odt','zip')
</div>
</br>
</br>
<div>
description(Optionnel)
<textarea style = "height:100%; width:100%;">

</textarea>
</div>

<div>

<input type = "submit"  value = "envoyer">

</div>

<div>

</div>



</div>

 </form>


<span style = "display:<?php echo $displayemail2?>">
<a href = "./verfiemail.php"style = "color:white;"> pour  commander vous dever valider votre email </a>
</span>

<?php

$validecommande = 0; 

if(isset($_POST['site']) && !empty($_POST['site'])){

$pseudo = $connect->real_escape_string(htmlspecialchars($_SESSION['pseudo']));

$site = $connect->real_escape_string(htmlspecialchars($_POST['site']));

$site = str_replace("jour","vitrine",$site);

$site = str_replace("nuit", "boutique", $site);

$suivi1 = "precommande";

$suivi1 = htmlspecialchars($suivi1);

$suivi = $connect->real_escape_string($suivi1);

$site = "INSERT INTO commande VALUES('','$pseudo','$site','$suivi')";

$connect->query($site);

$validecommande = $connect->query($site);

$commander = "SELECT * FROM  commande WHERE pseudo ='$pseudo' ORDER BY id DESC";

$commander1 = $connect->query($commander);

$commander2 = $commander1->fetch_assoc();
 
$idcommande = $commander2['id'];



$pseudo = $_SESSION['pseudo'];

$pseudo = htmlspecialchars($pseudo);

$pseudo = $connect->real_escape_string($pseudo);

$idcommande = htmlspecialchars($idcommande);

$idcommande = $connect->real_escape_string($idcommande);




if(isset($_FILES['picture']['name']) && !empty($_FILES['picture']['name'])){

$name = $_FILES["picture"]["name"];

$rename1 = explode(".",$name);

$filea = $rename1[0].$commander2['id'].".".$rename1[1];

$rename = $filea;

$link = getcwd()."/".$rename."1";

$lien = $connect->real_escape_string(htmlspecialchars($link)); 

$uploads_dir = $_SERVER['DOCUMENT_ROOT'];
$tmp_name = $_FILES["picture"]["tmp_name"];

$infosfichier = pathinfo($_FILES['picture']['name']);
$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','odt','zip');
$extension_upload = $infosfichier['extension'];

$repertoireDestination = dirname(__FILE__)."/";
$nomDestination        = "fichier_du_".date("YmdHis").'.'.$extension_upload;

$valide = 0;
if (is_uploaded_file($_FILES["picture"]["tmp_name"])) {
    if (rename($_FILES["picture"]["tmp_name"],
                   $repertoireDestination.$nomDestination)) {
        $valide = 1;
    } else {
        echo "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }          
} 




$file = $_FILES["picture"]["name"];

$file = $connect->real_escape_string($file);

$link = getcwd()."/".$nomDestination;

$lien = $connect->real_escape_string(htmlspecialchars($link));
 
$insertfichier = "INSERT INTO fichier VALUES('','$idcommande','$pseudo','$lien','$file')";

$connect->query($insertfichier);   

$res = 0;


}

}

if(isset($_POST['site']) && !empty($_POST['site'])){

echo '<META http-equiv="refresh" content="0; URL=produit.php">';

}


?>


</p>

</ul>
</h3>
</div>

</div>
<?php

include_once("./footer.php");

?>

</body>
</html>

