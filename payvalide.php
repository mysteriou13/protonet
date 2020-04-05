<html>
<body>
<?php 
include("./header.php");
include("./head.php");
include("./sqlbackend/sqlbackend.php");

$back = new sqlbackend();

$admin = $_POST['admin'];

$display = $_POST['display'];

$groupename = $_POST['groupename'];

$username = $_POST['username'];

$email = $_POST['email'];

$quota = $_POST['quota'];

$home = $_POST['quota'];

$password = $_POST['password'];

$displayname =$_POST['displayname'];

$active = $_POST['actibe'];

$disabled = $_POST['disabled'];

$Provide_avatar = $_POST['Provide_avatar'];

$salt = $_POST['salt'], 

$back->grouptable($nextcloud,$admin,$displayname,$groupename);

$back->User_group_table($nextcloud,$username,$groupname);

$back->User_table($nextcloud,$username,$email,$quota,$Home,$password,$displayname,$active,$disabled,$Provide_avatar,$salt);



?>

</body>
</html>
