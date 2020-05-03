
<?php
$createur = $_SESSION['pseudo'];

if(isset($_GET['type']) && !empty($_GET['type'])){

 $type = htmlspecialchars($_GET['type']);

}else{

$type = null;
}

$admin = "mysteriou";

$display = "test";

$groupename = "test";

$username = $pseudo;

$email = $sql2['email'];

$group = "test";

if(isset($_GET['nb']) && !empty($_GET['nb']) ){

$quota = htmlspecialchars($_GET['nb']);

}else{

$quota = null; 

} 
   
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

?>

</br>

<div id = "b6">


<form action  = "<?php $_SERVER['PHP_SELF']?>" method = "POST">
<center>
type de compte
</br>
<input type="radio"  id = "perso" name  = "perso" value = "perso" onclick = "changetype(this.id)">perso

<input type="radio" id = "thier" name  = "perso" value="thier" onclick = "changetype(this.id)" >thier

</br>
nombre de gigaoctet <input type="number" id = "nb" name="nb"  min = '1' max = '10'>

</br>
<input id = "sub" type = "button"  value = "valider" onclick = "dis(id)">
</center>

</form>


<div id = "radionull">

</div>

<div id = "paypal">
<center>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="mrmassaanthony@gmail.com">

<input type="hidden" name="item_name" value="<?php echo $item;?>">

<input type="hidden" name="amount" value="1.99">
<input type="hidden" name="currency_code" value="EUR">


<input type="hidden" name="custom" value="<?php echo $next?>">

   <input type="image" src="https://www.sandbox.paypal.com/fr_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
</center>

</form>
</div>

<?php
 
echo "<script>";


if(isset($_POST['perso'])  && !empty($_POST['perso']) ){

echo "
var pay = document.getElementById('paypal');

pay.style.display = 'block'; ";

}else{

echo "
var pay = document.getElementById('paypal');

pay.style.display = 'none'; ";

}

if(isset($_GET['type']) && !empty($_GET['type'])){


echo '
<script>

document.getElementById("paypal").style.display = "block"; 

</script>';

}

echo "</script>";

if(isset($_GET['nb']) && !empty($_GET['nb'])){

echo "<script>
document.getElementById('nb').value="; echo $_GET['nb'];

echo "</script>";

}

if(isset($_GET['nb']) && !empty($_GET['nb'])){
if(isset($_GET['type']) && !empty($_GET['type'])){

echo "<script> document.getElementById('paypal').style.display = 'block'
</script>
";



}
}else{
echo "<script>document.getElementById('paypal').style.display = 'none'</script>";


}

?>
<script type = "text/javascript" src ="./script/bouton.js">
</script>

<script>

var type = "<?php echo $_GET['type']?>";

document.getElementById(type).checked =true; 


</script>


