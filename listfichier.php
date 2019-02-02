<html>
<body>
<?php

session_start();


if(empty($_GET)){

$get = 0;
$order  = "ASC";

}

if(!empty($_GET['pad']) && $_GET['pad'] == 'ASC'){


$order = "ASC";

}

if(!empty($_GET['pad']) && $_GET['pad'] == 'DESC'){


$order  = "DESC";

}

if(!empty($_GET['calc']) && $_GET['calc'] == 'ASC'){


$order = "ASC";

}

if(!empty($_GET['calc']) && $_GET['calc'] == 'DESC'){


$order = "DESC";

}

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

}

include("head.php");

include("header.php");

include("divlistement.php");


?>

<center style  = "font-size:2em; margin:1em">

<div style= "display:<?php echo $display;?>">
<strong id = "b5">

liste des documents

</strong>
</br>

</center>

</div>
<div id = "ongletliste" style =" margin-left:2%; display:flex;">

<div onclick = "affichediv(this.id,'<?php echo $link?>','pad','<?php echo $order;?>')" id= "ongletpad" class = "typedoc">

 pad

</div>

<div onclick = "affichediv(this.id,'<?php echo $link;?>','calc','<?php echo $order;?>')" id= "ongletcalc" class = "typedoc">
calc
</div>

</div>
<div>

</div>
</br>

<div style = "display:flex; flex-wrap:wrap;">

<div>

<form  action = "<?PHP $_SERVER['PHP_SELF'];?>" method = "POST">

<input class = "button" type = "submit" value = "Ordre croissant" id = "ASC" name = "ASC" >

</form>

</div>


<div>

<form action  = "<?PHP $_SERVER['PHP_SELF']?>" method = "POST">

<input class = "button"  type  = "submit" value = "Ordre décroissant" id = "DESC" name = "DESC">

</form>

</div>

</div>

<div  id = "listongletcalc"style ="display:none;">

<?php

 listdiv($mysqli,"calc",$order);

?>

</div>

<div id  = "listongletpad" style = "display:block">
<?php 

 listdiv($mysqli,"pad",$order);

?>

</div>
</div>
<?php 

if(empty($_GET)){

echo "<script> changebackgroundcolor('ongletpad','darkblue','blue');</script>";

}


if($order == "ASC"){

echo "<script> changebackgroundcolor('ASC','darkblue','blue');</script>";
echo "<script> changebackgroundcolor('DESC','blue','darkblue');</script>";



}




if($order == "DESC"){

echo "<script> changebackgroundcolor('DESC','darkblue','blue');</script>";
echo "<script> changebackgroundcolor('ASC','blue','darkblue');</script>";

}

if(isset($_GET['pad']) && !empty($_GET['pad']) ){

echo "<script> changebackgroundcolor('ongletpad','darkblue','blue');</script>";

}

if(isset($_GET['calc']) && !empty($_GET['calc']) ){

echo "<script> changebackgroundcolor('ongletcalc','darkblue','blue');</script>";


}
if(isset($_GET['pad']) && !empty($_GET['pad']) ){

echo '<script>  display("listongletpad","block"); </script>';

echo '<script>  display("listongletcalc","none"); </script>';


}

if(isset($_GET['calc']) && !empty($_GET['calc']) ){

echo '<script>  display("listongletpad","none"); </script>';

echo '<script>  display("listongletcalc","block"); </script>';


}

?>
</body>
</html
