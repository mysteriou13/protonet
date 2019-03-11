<?php 
 include_once("head.php");
 include_once("header.php");
 include_once("iframe.php");

 $id =  "SELECT COUNT(*)idtransaction FROM transaction";

 $id1 = $mysqli->query($id);

 $id2 = $id1->fetch_assoc();

if(empty($id2['id'])){

$id2['id'] = 0;

}else{

$id2['id'] = $id2['id']+1;

}

 $idtransanction =  $id2['id'].uniqid().time().sha1($pseudo);

 $nameserver = 'localhost';

 $paypal = "/terraliberta/paypal";

 
if(empty($_SESSION['pseudo'])){

 header('Location:index.php');

}


if($nameserver == "localhost" ){

 $u = "http";

 $link = str_replace("vecchionet.com/", "terraliberta/paypal/",$link);

}else{

$link = str_replace("localhost/vecchionet.com/", "terraliberta.vecchionet.com",$link);

 $u = "https";

}

?>


<div>

<?php 

session_start();

if(empty($_SESSION['pseudo'])){
header("location:../index.php");

}else{

$pseudo = $_SESSION['pseudo'];

}
?>

<script>

function c(a){

  var d1 = 0;
 
  var d2 = 4;



  while(d1 <= d2){

   d1++;
  
  var d3 = "a"+d1; 
 
  var d =  document.getElementById(d3);
  if(d3 == a){

  d.style.display = "block";
  
 }else{

  d.style.display = "none";
 
}

  }
 


}

</script>

<center>
duréer abonnement:</br>


<label>1 mois /5 euro</label>  <input type = "radio"   onclick = "c('a1')" name = "abo"  id = "1">  &nbsp; &nbsp;

<label>3 mois /10 euro</label> <input type = "radio" name = "abo" onclick = "c('a2')"   id = "1">  &nbsp; &nbsp;

<label> 6 mois / 20 euro </label>  <input type = "radio" name = "abo" onclick = "c('a3')" id  = "1" > &nbsp; &nbsp;

<label> 12 mois / 30 euro </label>  <input type = "radio" name = "abo" onclick = "c('a4')" id = "1" > &nbsp; &nbsp;


</br>

</form>

<div  id = "a1" style = "display:none">

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="MNMXGZ7B73BKN">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<input type="hidden" name="notify_url" value="https://vecchionet.com/payvalide.php">

<input type="hidden" name="item_number" value="1">
<input type = "hidden" name  = "pseudo" value = "<?php echo $_SESSION['pseudo']?>">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">

</form>

</div>

<div style = "display:none"  id = "a2">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JRL9BP97TLT7A">
   <input type="hidden" name="notify_url" value="https://vecchionet.com/payvalide.php">


<input type="hidden" name="item_number" value="3">
<input type = "hidden" name  = "pseudo" value = "<?php echo $_SESSION['pseudo']?>">

<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
</div>

<div style = "display:none"  id = "a3">

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="B553KWLBMTE2J">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
   <input type="hidden" name="notify_url" value="https://vecchionet.com/payvalide.php">

<input type="hidden" name="item_number" value="6">
<input type = "hidden" name  = "pseudo" value = "<?php echo $_SESSION['pseudo']?>">

<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
</div>

<div style = "display:none" id = "a4">

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DMV3D7WQGKG2J">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<input type="hidden" name="notify_url" value="https://vecchionet.com/payvalide.php">

<input type="hidden" name="item_number" value="12">
<input type = "hidden" name  = "pseudo" value = "<?php echo $_SESSION['pseudo']?>">

<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</center>

</div>
