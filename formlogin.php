

<form method = "POST" action = "<?php $_SERVER['PHP_SELF']?>" >
<p>
connection
</p>
<label>
pseudo
</label>

<input type = "text" name = "pseudo">

<label>
pass
</label>
<input type = "password" name = "pass">
<input type = "submit" style = "
color:black;
">
</br>
<center>
<div style = "color:red;"> 

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

header('Location:index.php');

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
</div>
</center>
</span>
</br>
<span>
<a href = "./inscription.php" style = "color:white;"> par encore membre?</a>
</span>
</form>

