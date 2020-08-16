<?php 

require("./model/modelinscription.php");
require("./view/afficheforminscription.php");

$validepseudo = 0;
$validepass = 0;
$valideemail = 0;
$display = "none";
$wrap = null;
$date = date("dmY");
$date = $mysqli->real_escape_string($date);


$total = $validepseudo+$validepass+$valideemail;


if(isset($_POST['CGU']) && $_POST['CGU'] == "on" && $total == 3){


inscription($pseudo,$pass,$mysqli,$email,$e);

}

?>

</table>
