<html>
<body>

<?php 
session_start();

$d = "corsicanet";

include_once("./head.php");

include_once("./header.php");

$des1 = "cliquer pour agrandir";

 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$name = null;
$email = null;

$nb = mb_substr_count($monUrl, "#");


?>

<div id = "contact">


<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']."#contact"?>">
<center>
<div style = "
color:white;
height:100%;
display:flex;
flex-direction:column;
">

<div>
<strong style = "color:white; font-size:2em">
formulaire  de contact
</strong>
</div>

<div style = "
display:flex;
justify-content: center;
">

<div>name</div> <input type = "text" name = "name">
<?php 
if(isset($_POST['name']) && empty($_POST['name'])){

echo "error name vide";

}

if(isset($_POST['name']) && !empty($_POST['name'])){

$name = 1;

}

?>
</div>

<div style = "
display:flex;
justify-content: center;

">
 email<input type = "text" name = "email">
<?php 
if(isset($_POST['email']) && empty($_POST['email'])){

echo "error email vide";

}

if(isset($_POST['email']) && !empty($_POST['email'])){
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

echo "format email no valide";

}

}
?>
</div>

<div style = "
height:100%;

">
message
</br>
<textarea name="textarea" style = "height:50%; width:50%">

</textarea>
</br>
<input type = "submit">
</div>

</div>

</center>

</form>

</div>

<?php 

include_once("footer.php");

?>

</body>
</html>
