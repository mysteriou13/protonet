<html>
<body>
<?php
include("./header.php"); 
include("./head.php");
include("./sqlbackend/sqlbackend.php");


$back = new sqlbackend();

$date = date("d-m-Y");

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

$type = $tab[15]; 
$rad = $tab[16];


if($type == "perso"){

$back = new sqlbackend();

if($rad == "abo"){
$date = 'SELECT * FROM nextcloud WHERE pseudo = "'.$pseudo.'"';

$date1 = $mysqli->query($date);

$date2 = $date1->fetch_assoc();

$quota = "+".$quota." month";

$quota = $mysqli->real_escape_string($quota);

$date = new DateTime($date2['date']);


$date->modify($quota);
 
$quota = $date->format('d-m-Y');

$quota  = $mysqli->real_escape_string($quota);

$selectnext = 'SELECT * FROM nextcloud WHERE pseudo = "'.$pseudo.'"';

$selectnext1 = $mysqli->query($selectnext);

$selectnext2 = $selectnext1->fetch_assoc();

$selectnext2['pseudo'];

$next = 'UPDATE nextcloud SET date = "'.$quota.'" WHERE pseudo = "'.$pseudo.'"';

$back->grouptable($mysqli,$admin,$displayname,$groupename);

$back->User_group_table($mysqli,$username,$groupename);

$back->User_table($mysqli,$username,$email,$quota,$home,$password,$displayname,$active,$disabled,$avatar,$salt);

if($selectnext2['pseudo'] == null){

$back->nextcloud($mysqli,$pseudo,$email,$quota,$createur);

}else{

$mysqli->query($next);

}

}

}


if($type == "thier"){

$group = "thier";

$group = $mysqli->real_escape_string($group);

$quota = $mysqli->real_escape_string($quota);

$nb = 'SELECT * FROM nbgroupe WHERE pseudo = "'.$pseudo.'"';

$nb1 = $mysqli->query($nb);

$nb2 = $nb1->fetch_assoc();

if($nb2['nb'] != null){

$upnb = $nb2['nb']+$quota;

$upnb = $mysqli->real_escape_string($upnb);

$up = 'UPDATE nbgroupe SET nb  = "'.$upnb.'" WHERE pseudo =  "'.$pseudo.'"';

$mysqli->query($up);


}else{

$up =  'INSERT INTO nbgroupe VALUES (NULL,"'.$pseudo.'","'.$group.'","'.$quota.'")';

$mysqli->query($up);



}


}


?>

</body>
</html>
