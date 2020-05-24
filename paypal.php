<html>
<?php 
include("./head.php");
?>
<body>



<?php 
include("./header.php");

if(empty($_SESSION['pseudo'])){

header("Location:index.php");

}

$sql = 'SELECT * FROM membre WHERE pseudo="'.$pseudo.'"';

$sql1 = $mysqli->query($sql); 

$sql2 = $sql1->fetch_assoc();

$email = $sql2['email'];

include("./boutonpaypal.php");
?>


</body>
</html>
