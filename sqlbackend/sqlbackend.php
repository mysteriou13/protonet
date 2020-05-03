<?php 
class sqlbackend{

function grouptable($connection,$admin,$displayname,$groupename){


 $admin = $connection->real_escape_string($admin); 


 $displayname = $connection->real_escape_string($displayname); 

$groupename = $connection->real_escape_string($groupename); 


$sql = 'INSERT INTO Group_table VALUES(NULL,"'.$admin.'","'.$displayname.'","'.
$groupename.'")';

$connection->query($sql);


}


function User_group_table($connection,$Username,$Groupname){

$Username = $connection->real_escape_string($Username);

$Groupname = $connection->real_escape_string($Groupname);

$sql ='INSERT INTO User_group_table VALUES(NULL,"'.$Username.'","'.$Groupname.'")';

$connection->query($sql);

}

function User_table($connection,$Username,$Email,$Quota,$Home,$Password,$Displayname,$active,$Disabled,$Provide_avatar,$Salt){

$Username = $connection->real_escape_string($Username);

$Email = $connection->real_escape_string($Email);

$Quota = $connection->real_escape_string($Quota);

$Home = $connection->real_escape_string($Home);

$Password = $connection->real_escape_string(sha1($Password));

$Displayname = $connection->real_escape_string($Displayname);

$active= $connection->real_escape_string($active);

$Disabled = $connection->real_escape_string($Disabled);

$Provide_avatar = $connection->real_escape_string($Provide_avatar); 	

$Salt = $connection->real_escape_string($Salt);

$sql ='INSERT INTO User_table  VALUES(NULL,"'.$Username.'","'.$Email.'","'.$Quota.'","'.$Home.'","'.$Password.'","'.$Displayname.'",
"'.$active.'","'.$Disabled.'","'.$Provide_avatar.'","'.$Salt.'")';

$connection->query($sql);

}

function nextcloud($connection, $pseudo,$email,$date,$createur){

$pseudo = $connection->real_escape_string($pseudo);

$email = $connection->real_escape_string($email);

$date = $connection->real_escape_string($date);

$createur = $connection->real_escape_string($createur);

$sql = 'INSERT INTO nextcloud VALUES(NULL,"'.$pseudo.'","'.$email.'","'.$date.'",
"'.$createur.'")';

$connection->query($sql);

}

}


?>
