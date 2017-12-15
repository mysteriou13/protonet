<html>
<body>

<?php 
session_start();

$d = "corsicanet";

include_once("./hautepage.php");

$des1 = "cliquer pour agrandir";

  $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$name = null;
$email = null;
$fichier = null;

$nb = mb_substr_count($monUrl, "#");


?>
</br>
<div id = "contact1"  style= "color:white; font-size:2em;"onclick = "document.location ='./contact.php'">
<center>
<strong>haut de la page</strong>
</center>

</div>

<div id = "contact">


<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']."#contact"?>"  enctype="multipart/form-data">
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

<div>name</div> <input type = "text" name = "name" value = "
<?php 
if(isset($_POST['name']) && !empty($_POST['name'])){

echo $_POST['name'];

}
?>
">
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
 email<input type = "text" name = "email" value = "
<?php 

if(isset($_POST['email']) && !empty($_POST['email'])){

echo $_POST['email'];

}

?>
">
<?php 
if(isset($_POST['email']) && empty($_POST['email'])){

echo "error email vide";

}

if(isset($_POST['email']) && !empty($_POST['email'])){
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

$email = 1;

}else{
echo "format email non valide";

}


}
?>
</div>

<div>
piece jointe<input  name = "picture" type = "file">
<?php 
if (isset($_FILES['picture']) AND $_FILES['picture']['error'] == 0){

$uploads_dir = $_SERVER['DOCUMENT_ROOT'];
$tmp_name = $_FILES["picture"]["tmp_name"];

$id = "SELECT id FROM commentaire ORDER BY ID DESC LIMIT 0,1";

$id1 = $connect->query($id);

$row = $id1->fetch_assoc();

$name = $_FILES["picture"]["name"];

$rename1 = explode(".",$name);

$filea =$rename1[0].$row['id'].".".$rename1[1];

$rename = $filea;

$link = getcwd()."/".$rename."1";

$infosfichier = pathinfo($_FILES['picture']['name']);
$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','odt');
$extension_upload = $infosfichier['extension'];

                if (in_array($extension_upload, $extensions_autorisees)){

move_uploaded_file($tmp_name, "$uploads_dir/$rename");



 $fichier = 1;

}else{

echo "error upload fichier";

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
<?php
 
if(isset($_POST['textarea']) && !empty($_POST['textarea'])){

echo $_POST['textarea'];

}
?>

</textarea>
</br>
<?php 


if(isset($_POST) && !empty($_POST)) {
 $pseudo = $connect->real_escape_string(htmlspecialchars($_POST['name'])); 

 $message = $connect->real_escape_string(htmlspecialchars($_POST['textarea'])); 

 $mail = $connect->real_escape_string(htmlspecialchars($_POST['email']));

 $lien = $connect->real_escape_string(htmlspecialchars($link));

 $name1 = $connect->real_escape_string(htmlspecialchars($name));
 
 $rename2 = $connect->real_escape_string(htmlspecialchars($rename));
 
$connect->query("INSERT into commentaire VALUES (NULL,'$pseudo','$mail','$message','$lien','$name1','$rename2')");

 header("Location: index.php");

}

?>
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
