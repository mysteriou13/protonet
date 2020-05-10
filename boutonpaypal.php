

</br>
<input type = "hidden" id = "pseudo" value = "<?php echo $_SESSION['pseudo']; ?>">
<input type = "hidden" id = "email" value = "<?php echo $email ?> ">

<div id = "b6">

<center>
<form action  = "<?php $_SERVER['PHP_SELF']?>" method = "POST">

<table>
<tr>

</br>

<td>

<center> type de compte</center>

</td>

</tr>

</table>

<table>
<tr>

<td>

<center>
personel <input type="radio"  id = "perso" name  = "perso" value = "perso" 
onclick = "bou.dis()">
</center>

</td>

<td>
<center>
groupe<input type="radio" id = "thier" name  = "perso" value="thier" onclick = "bou.dis()" >
</center>

</td>

</br>

</tr>

</table>

<div id = "passthier">

</div>

<div id="passperso">
<table>
<tr>

<td>
utiliser le mot de pass  du site
<input type ="radio" id = "passcloud" name ="passcloud" value ="passcourant" onclick="bou.dis()"> 
</td>

<td>

<center>
mot de pass différent 
<input type = "radio" id = "newpass" name ="passcloud" value = "newpass" onclick = "bou.dis()">
</center>

</td>

</tr>

</table>

<div id = "divpass">

<table>
<tr>
<td>

<center>
 mot de pass  <input type = "password" id = "passcourant" name = "passcourant" value = "">
</center>

</td>
</tr>
</table>
 </div>

</div>

 <div id = "divnb"> 
<table>
<tr>
<td>

<center>

<div> <span id = "textnb"> nombre de gigaoctect</span>   <input id = "nb" type="number" id = "nb" name="nb"  min = '1' max = '10'> </div>

</center>

</td>
</tr>
</table>

</div>

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


