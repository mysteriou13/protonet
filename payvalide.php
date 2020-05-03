<html>
<body>
<?php 
include("./header.php");
include("./head.php");
include("./sqlbackend/sqlbackend.php");


$back = new sqlbackend();

$date = date("d/m/Y");

$tab = explode("_",$tab);

if(isset($_POST['custom']) ){

$tab = $_POST['custom'];

$admin = $tab[1];

$display = $tab[2];

$groupename = $tab[3];

 $username = $tab[4];
 $email = $tab[5];

 $quota = $tab[6];
 $home = $tab[7];
 $password = $tab[8];
 $displayname = $tab[9];
 $active = $tab[10];
 $disabled = $tab[11];
 $avatar = $tab[12];
 $salt = $tab[13];
 $createur = $tab[14];
 $pseudo = $tab[14];

$back = new sqlbackend(); 
$back->grouptable($mysqli,$admin,$displayname,$groupename);

$back->grouptable($mysqli,$admin,$displayname,$groupename);

$back->User_group_table($mysqli,$username,$groupename);

$back->User_table($mysqli,$username,$email,$quota,$home,$password,$displayname,$active,$disabled,$avatar,$salt);

$back->nextcloud($mysqli,$pseudo,$email,$date,$createur);

}




?>

</body>
</html>
