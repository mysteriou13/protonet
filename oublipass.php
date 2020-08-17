
<html>
<body>

<?php
require("./controller/header.php");
include("./view/head.php");
require("./model/modeloublispass.php");
$mail = new email();

require("./view/viewoublipass.php");
?>

