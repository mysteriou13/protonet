<html>
<body>
<?php
include_once("./section/head.php");
include_once("./section/header.php");

$validepseudo = 0;
$validepass = 0;
$valideemail = 0;
$display = "none";
$wrap = null;
$date = date("dmY");
$date = $mysqli->real_escape_string($date);

require("./controller/forminscription.php");
?>


<script>

if(mob.typescreen() == 1){
var td = document.getElementsByTagName("td");

td[0].style.fontSize="1.3em";

for(var i =0; i<td.length; i++){

td[i].style.fontSize = "1.3em";

td[i].style.paddingLeft = "0%";



}

}
</script>

</body>
</html>
