


<div style = "
margin-left:2%;
">
<form method = "POST" action = "<?php $_SERVER['PHP_SELF']?>" >

connection

<label>
pseudo

<input style = "width:20%" type = "text" name = "pseudo"/>
</label>
pass

<input style = "width:20%" type = "password" name = "pass"/>

<input type = "submit" style = "color:black;"/>


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

<a href = "inscription.php#inscription" style = "color:white;">pas encore en membre? </a>

</form>

</div>
