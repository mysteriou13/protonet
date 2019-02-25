<html>
<body>
<?php 

include("/var/www/html/admin/connect.php");
include("header.php");
include("head.php");
include("delete.php");

if(empty($_SESSION['pseudo'])){

header('Location:index.php');

}

$delete = new deletefile();

$type = htmlspecialchars($_GET['type']);

$name = htmlspecialchars($_GET['name']);

$id = htmlspecialchars($_GET['id']);

$status = null;

$domaine = $domaine."deletefile.php?type=".$type."&name=".$name."&id=".$id;

?>

<div id = "b">

<center>
supression du <?php echo $type."&nbsp;".$name?>&nbsp; <button onClick = "document.location ='<?php echo $domaine."&status=valide";?>' ">confirmer</button>

 <button onClick = "document.location ='<?php echo $domaine."&status=false";?>' ">annuler</button>

</center>
</div>

<?php
if(isset($_GET['status']) && !empty($_GET['status'])){

$status = htmlspecialchars($_GET['status']);

if($status == "valide"){
if($type == "calc"){

$delete->deletecalc($name,$mysqli);

}

if($type == "pad"){

$delete->deletepad($mysqli,$store,$name);

}

}

if($status == "false"){
header('Location:listfichier.php');

}

}
?>

</body>
</html>
