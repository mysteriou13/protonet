

<div class= "parametre">
<a  href = "parametre.php">mon compte</a>

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
