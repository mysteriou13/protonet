<?php 

require("./model/modelinscription.php");
require("./view/afficheforminscription.php");

$total = $validepseudo+$validepass+$valideemail;


if(isset($_POST['CGU']) && $_POST['CGU'] == "on" && $total == 3){


inscription($pseudo,$pass,$mysqli,$email,$e);

}

?>

</table>
