
<div style = "
 display: flex;
 flex-wrap: nowrap;
 margin-left:40%;
 font-size:2em;
">
<form method = "POST" action = "<?php $_SERVER['PHP_SELF']?>" >

<div>
connection
</br>
pseudo

<input style = "width:90%" type = "text" name = "pseudo"/>
</div>

<div>
pass

<input style = "width:90%" type = "password" name = "pass"/>
</div>

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

<div>

<a href = "inscription.php#inscription" style = "color:white;">pas encore en membre? </a>

</div>
</form>

</div>

