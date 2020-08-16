<html>
</body>
</br>


<div class ="b3"  style ="padding:1%;">
<center>


<div id = "b6">

formulaire contact

</div>
</br>

<div>
<form action = "<?php $_SERVER['PHP_SELF']?>" method = "POST">

<div id = "b6"> 
*email <input type = "text" name = "email">
<?php 
if(isset($_POST['email']) && empty($_POST['email'])){

echo "champs vide";

}

if(isset($_POST['email']) && !empty($_POST['email'])){
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

echo "email invalide";

}
}

?>

</div>

</br>

<div  id ="b6">

*titre <input type = "text" name = "titre">

<?php 
if(isset($_POST['titre'])  && empty($_POST['titre'])){

echo "champs vide";

}

?>
</div>

</br>

<div id ="b6">

message 
</br>

<textarea id ="message" name = "message" >

</textarea>

</br>
</br>

<?php 

if(isset($_POST['message']) && empty($_POST['message'])){

echo "champs vide";

}

?>

</div>

<div>
</br>

<button  id = "envoyer"  type = "submit"  value  = "envoyer">
envoyer

</button>

</div>

</form>
</div>

</center>

</div>

</body>
</html>


