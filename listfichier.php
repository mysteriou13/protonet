<html>
<body>
<?php

session_start();

include("head.php");

include("header.php");

include("divlistement.php");



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

$doc = "SELECT COUNT(*)name FROM url WHERE pseudo = '$pseudo'";

$doc1 = $mysqli->query($doc);

$doc2 = $doc1->fetch_assoc();


if($doc2['name'] == 0){

$display = "none";

}

?>

<center style  = "font-size:2em; margin:1em">

<div >
<strong id = "b5">

Mes documents

</strong>
</br>

</center>

</div>



<div id = "ongletliste" style =" width:100%; margin-left:2%; display:flex; justify-content:space-around; ">

<p class = "divheader">

<a href = "pad.php" >nouveau pad </a>

</p>

<p  class = "divheader" id = "newcalc">

<a   href = "calc.php"> nouveau tableur </a>

</p>

<p>
<button onclick = "affichediv(this.id,'<?php echo $link?>','pad','<?php echo $order;?>')" id= "ongletpad" class = "typedoc">

liste pad

</button>
</p>

<p>
<button onclick = "affichediv(this.id,'<?php echo $link;?>','calc','<?php echo $order;?>')" id= "ongletcalc" class = "typedoc">

liste calc

</button>
</p>

<form  action = "<?PHP $_SERVER['PHP_SELF'];?>" method = "POST">

<input class = "button" type = "submit" value = "Ordre croissant" id = "ASC" name = "ASC" >

</form>

<form action  = "<?PHP $_SERVER['PHP_SELF']?>" method = "POST">

<input class = "button"  type  = "submit" value = "Ordre décroissant" id = "DESC" name = "DESC">

</form>

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
