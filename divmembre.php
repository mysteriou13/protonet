<div  class = "divdisplay" id = "newcalc">
<a id = "b"  href = "calc.php"> nouveau tableur </a>

</div>


<div class = "divdisplay" id = "newpad">
<a id = "b" href = "pad.php">nouveau pad </a>

 </div>


<div class = "divdisplay" id = "sondage">

<a id = "b" href = "https://framadate.vecchionet.com/">sondage</a>
</div>

<div class = "divdisplay" id  = "edition">
<a id = "b" href = "./edit.php">edition d'image</a>
</div>


<div class = "divdisplay" id = "projet">
<a id = "b" href = "https://kanboard.vecchionet.com">gestion de projet</a>
</div>

<div class= "parametre">
<a id = "b" href = "parametre.php"> parametre </a>

</div>
<div class = "divfichier">

<a id = "b" href = "listfichier.php" > mes  documents </a>

</div>

<div style = "background-color:blue; border:2px solid white; border-radius:25px; padding:1%; font-size:1.5em;" >
<?php 
 $page = "deconnect.php";

if($localhost == 0){

$page = "/deconnect.php";

}


$link1 = $link.$page;

?>


<a id = "b" href = "<?php echo $link1?>">deconnection</a>

</div>
