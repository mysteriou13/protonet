<?php 

session_start();

require("./section/mail.php");

require("../admin/connect.php");

$localhost = null; 

$e = new email();

if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){

$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);

}

?>
