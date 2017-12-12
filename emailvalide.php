<?php 

session_start();

?>
<html>
<body>

<?php 

include_once("./hautepage.php");

?>

<div id = "contact" style = "height:100%">

<?php 

$email = htmlspecialchars($_GET['email']);

$email =  $connect->real_escape_string($email);

$sql = "SELECT count(*)email FROM membre WHERE email = '$email'";

$sql1 = $connect->query($sql);

$sql2 = $sql1->fetch_row();

if($sql2[0] == 1){

$verfif = $connect->real_escape_string(1);

$v = "UPDATE  membre SET verifemail ='$verfif' WHERE email = '$email'";

$connect->query($v);

}

?>

email valid&eacute;

</br>
<a href = "./index.php" style = "color:white"> retour a l'accueil </a>

</div>

<?php 

include_once("./footer.php");
?>

</body>
</html>
