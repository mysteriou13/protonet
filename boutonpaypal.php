

</br>
<input type = "hidden" id = "pseudo" value = "<?php echo $_SESSION['pseudo']; ?>">
<input type = "hidden" id = "email" value = "<?php echo $email ?> ">

<div id = "b6">

<center>
<form action  = "<?php $_SERVER['PHP_SELF']?>" method = "POST">
type de compte
</br>

perso <input type="radio"  id = "perso" name  = "perso" value = "perso" 
onclick = "bou.dis()">

thier<input type="radio" id = "thier" name  = "perso" value="thier" onclick = "bou.dis()" >
</br>

<div id = "passthier">
groupe

</div>

<div id="passperso">
pour le compte nextcloud</br>
utiliser le mot de pass  du site<input type ="radio" id = "passcloud"
 name ="passcloud" onclick="bou.dis()"> mot de pass différent <input type = "radio" id = "newpass" name ="passcloud" onclick = "bou.dis()">
</br>

<div id = "divpass">
 mot de pass  <input type = "password" id = "passcourant" name = "passnextcloud" value = ""> </div>
</div>

 nombre de gigaoctet<input type="number" id = "nb" name="nb"  min = '1' max = '10'>

<input id = "sub" type = "button"  value = "valider" onclick = "bou.div()">
</center>

</form>
</center>

<div id = "radionull">

</div>

<div id = "paypal">
<center>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="mrmassaanthony@gmail.com">

<input type="hidden" id = "item_name" name="item_name" value="<?php echo $item;?>">

<input type="hidden" name="amount" value="1.99">
<input type="hidden" name="currency_code" value="EUR">


<input type="hidden" id = "custom" name="custom" value ="">

   <input type="image" src="https://www.sandbox.paypal.com/fr_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
</center>

</form>
</div>

<script type = "text/javascript" src ="./script/boutonpaypal.js">
</script>

<script>


var bou = new boutonpaypal(); 

</script>


