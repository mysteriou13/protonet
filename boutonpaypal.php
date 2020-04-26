<?php 
session_start();

$_SESSION['pseudo']="mysteriou";

$createur = $_SESSION['pseudo'];

$type = "perso";

$admin = "mysteriou";

$display = "test";

$groupename = "test";

$username ="test";

$email = "email";

$group = "test";

$email = "elio007@hotmail.fr";

$quota = "5GO"; 

$home = "/var/www/html/nextcloud/data/";

$password = sha1("test");

$displayname = "test";

$active = "true";

$disable = "true";

$avatar ="avatar";

$salt = "salt";

 $next = "nextcloud"."_".$admin."_".$display."_".$groupename."_".$username."_".$email."_
".$quota."_".$home."_".$password."_".$displayname."_".
$active."_"."$disable"."_".$avatar."_"."$salt"."_".$createur;

$tab = explode("_",$next); 

$total = "30";

?>

<div>

<form>

type de compte

</br>

<input type="radio" name  = "perso" value="perso" onclick = "rad('perso')">perso

</br>

<input type = "button" value = "valider" onclick = "dis('paypal')">

</form>

</div>

<div id = "radionull">

</div>

<div id = "paypal">

  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="mrmassaanthony@gmail.com">

<input type="hidden" name="item_name" value="Redfish from onlinefishingtournament.com">

<input type="hidden" name="amount" value="1.99">
<input type="hidden" name="currency_code" value="EUR">


<input type="hidden" name="custom" value="<?php echo $next?>">

   <input type="image" src="https://www.sandbox.paypal.com/fr_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">


</form>

</div>

<script  src = "./script/boutonpaypal.js"/>
</script>

