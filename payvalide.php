<html>
<body>
<?php
include("./header.php"); 
include("./head.php");
include("./sqlbackend/sqlbackend.php");


$back = new sqlbackend();

$date = date("d/m/Y");

$tab = $_POST['custom'];

$tab = explode("_",$tab);

$admin = $tab[1];

$display = $tab[2];

$groupename = $tab[3];
$username = $tab[4];
$email = $tab[5];
$quota = $tab[6];
$home = $tab[7];
$password = $tab[8];

 if($password == "courant"){

$sql = 'SELECT * FROM membre WHERE pseudo = "'.$pseudo.'"';

$sql1 = $mysqli->query($sql);

$sql2 = $sql1->fetch_assoc();

$password = $sql2['pass'];

}else{

$password = sha1($password);

}
 
$displayname = $tab[9];
$active = $tab[10];
$disabled = $tab[11];
$avatar = $tab[12];
$salt = $tab[13];
$createur = $tab[14];

$back = new sqlbackend();


$back->grouptable($mysqli,$admin,$displayname,$groupename);

$back->User_group_table($mysqli,$username,$groupename);

$back->User_table($mysqli,$username,$email,$quota,$home,$password,$displayname,$active,$disabled,$avatar,$salt);

$back->nextcloud($mysqli,$pseudo,$email,$date,$createur);



?>

</body>
</html>
