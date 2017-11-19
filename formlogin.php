


<div style = "
margin-left:2%;
font-size:1em;
">
<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']?>" >
<div style = "font-size:1em; color:white; height:100%;">
<center>

connection
</br>
<label>
pseudo
</br>
<input style = "width:100%" type = "text" name = "pseudo"/>
</label>
</br>
pass
</br>
<input style = "width:100%" type = "password" name = "pass"/>
</br>
<input type = "submit" style = "color:black;"/>
</br>
<a style = "color:white; font-size:1em;" href = "inscription.php"> pas encore membre ?</a>
<?php

if(isset($_POST['pseudo']) && empty($_POST['pseudo'])){
echo "<p id = 'pseudovide'>";

echo 'error pseudo vide';

echo '</p>';
}

if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['pass']) && !empty($_POST['pass']) ){

$v = $_POST['pseudo'];

$p = sha1($_POST['pass']);

$sql1 = mysqli_query($connect,"SELECT count(*)pseudo FROM membre  WHERE pseudo = '$v' && pass = '$p' ");

$sql2 = mysqli_fetch_row($sql1);

if($sql2[0]){

$_SESSION['pseudo'] = $_POST['pseudo'];

header("location:./index.php");

}else{

echo "pseudo ou mot de pass incorrect";

}




}

if(isset($_POST['pass']) && empty($_POST['pass'])){

echo '<p>';
echo 'erro pass vide';
echo '</p>';

}

?>

</center>

</div>
</form>

</div>
