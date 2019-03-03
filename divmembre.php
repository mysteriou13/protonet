
<div class = "divheader" id = "sondage">

<a  href = "./framadate.php">sondage</a>
</div>

<div class = "divheader" id  = "edition">
<a   href = "./edit.php">edition d'image</a>
</div>


<div class = "divheader" id = "projet">
<a  href = "https://kanboard.vecchionet.com">gestion de projet</a>
</div>

<div class= "parametre">
<a  href = "parametre.php"> parametre </a>

</div>

<div class = "divheader">

<a href = "terraliberta.php">terraliberta </a>

</div>

<div class = "divheader">

<a  href = "listfichier.php" > mes  documents </a>

</div>

<div style = "background-color:blue; border:2px solid white; border-radius:25px; padding:1%; font-size:1.5em;" >
<?php 
 $page = "deconnect.php";

if($localhost == 0){

$page = "/deconnect.php";

}


$link1 = $link.$page;

?>


<a  href = "<?php echo $link1?>">deconnection</a>

</div>
