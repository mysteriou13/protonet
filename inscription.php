<html>
<body>
<?php
include_once("head.php");
include_once("header.php");
include_once("./install/connect.php");

$validepseudo = 0;
$validepass = 0;
$valideemail = 0;
$display = "none";

$date = date("dmY");

$date = $mysqli->real_escape_string($date);

include("forminscription.php");

?>
<script>

var a = document.getElementById("connection");

a.style.display = "none";

</script>



</body>
</html>
