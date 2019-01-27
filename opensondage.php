<?php 
include("hautepage.php");

$sondage =  $protole.$domaine."opensondage.php";

$typesondage =  null;

$polldisplay = "none";

$date = "https://framadate.vecchionet.com/create_poll.php?type=";
?>

<div id = "b3">
<center>
Opensondage:
</center>
</div>

<div  style = "display:flex; justify-content:center;">
<div>
<form action = "<?php echo $sondage."?type=autre" ?>" method = "POST">

<input type = "submit" id = "b3" value = "sondage classique">

</form>
</div>

<div>
<form action = "<?php echo $sondage."?type=date"?>" method = "POST">

<input type = "submit" id = "b3" value = "sondage avec date">

</form>
</div>

</div>


<?php

if(isset($_GET['type']) && !empty($_GET['type'])){

$polldisplay = "block";

$typesondage = htmlspecialchars($_GET['type']);


}

?>

<div style = "display:<?php echo $polldisplay;?>">

<iframe  src = "<?php echo $date?>">

</iframe>

</div>

