<html>
<body>
<?php
include_once("head.php");
include_once("header.php");

$validepseudo = 0;
$validepass = 0;
$valideemail = 0;
$display = "none";
$wrap = null;
$date = date("dmY");
$date = $mysqli->real_escape_string($date);

include("forminscription.php");
?>

</body>
</html>
