<html>
<body>
<?php

session_start();
$order  = "ASC";

$colorpad = "darkblue";
$colorcalc = "blue";

$colorcroissant = "darkblue";
$colordecroissant = "blue";




if(empty($_SESSION['pseudo'])){

echo '<meta http-equiv="refresh" content="0; URL=index.php">';

}

if(isset($_POST['DESC'])){

$order = "DESC";

$colordecroissant = "darkblue";

$colorcroissant = "blue";

}

if(isset($_POST['ASC'])){

$order = "ASC";

$colorcroissant = "darkblue";
$colordecroissant = "blue";

}

include("head.php");

include("header.php");

include("divlistement.php");

$displaycalc = "none";
$displaypad = "pad";

if(isset($_GET['pad']) && !empty($_GET['pad']) ){

$displaypad = "block";
$displaycalc = "none";

$colorpad = "darkblue";
$colorcalc = "blue";


}

if(isset($_GET['calc']) && !empty($_GET['calc']) ){
$colorpad = "blue";
$colorcalc = "darkblue";


$displaypad = "none";
$displaycalc = "block";
}

?>


<center style  = "font-size:2em; margin:1em">

<div style= "display:<?php echo $display;?>">
<strong id = "b">

liste des documents

</strong>
</br>

</center>

</div>
<div id = "ongletliste" style = "  margin-left:2%; display:flex;">

<div onclick = "affichediv(this.id,'<?php echo $link?>','pad')" id= "ongletpad" style = "   border-radius:20px 20px;  color:white; padding:1%; font-size:1.5em;  margin-right:0.5%; solid white; background-color:<?php echo $colorpad;?>; ">

 pad

</div>

<div onclick = "affichediv(this.id,'<?php echo $link;?>','calc')" id= "ongletcalc" style = "border-radius:20px 20px; color:white; padding:1%; font-size:1.5em;  background-color:<?php echo $colorcalc;?>">
calc
</div>

</div>
<div>

</div>
</br>

<div style = "display:flex">

<div>

<form  action = "<?PHP $_SERVER['PHP_SELF'];?>" method = "POST">

<input class = "button" style = "background-color:<?php echo $colorcroissant;?>"type = "submit" value = "Ordre croissant" name = "ASC" >

</form>

</div>


<div>

<form action  = "<?PHP $_SERVER['PHP_SELF']?>" method = "POST">

<input class = "button" style = "background-color:<?php echo $colordecroissant;?>" type  = "submit" value = "Ordre décroissant" name = "DESC">

</form>

</div>


</div>


<div  id = "listongletcalc"style ="display:<?php echo $displaycalc?>;">

<?php

 listdiv($mysqli,"calc",$order);

?>

</div>

<div id  = "listongletpad" style = "display:<?php echo $displaypad?>;">
<?php 

 listdiv($mysqli,"pad",$order);

?>

</div>
</div>

</body>
</html
