
<div id = "site5a4">
<?php 
$text = null;
if(isset($_GET['parametre5']) && !empty($_GET['parametre5'])){
if($_GET['parametre5'] == 2){

$text = "<center>contact</center>";

}

if($_GET['parametre5'] == 3){

$text = " <center> a propos </center>";

}

}else{

$text = "<center>accueil</center>";

}

echo $text;
?>

</div>


