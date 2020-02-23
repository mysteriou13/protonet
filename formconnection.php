

<form id ="connectionmobile" class="button" action = "<?php echo $_SERVER['PHP_SELF']?>" method ="POST">

<table>

<tr>

<td>
 pseudo  <input  name="pseudo" type= "text">  
</td>

</tr>

<tr>

<td>
 mot de pass  <input name="pass" type= "password">
</td>

</tr>

<tr>

<td>
<center>
 <input class= "button" type="submit" value = "connection">
</center>

</td>

</tr>

</table>

</div>


</form>



<form id ="connection" class="button" action = "<?php echo $_SERVER['PHP_SELF']?>" method ="POST">


<label> pseudo</label>  <input  name="pseudo" type= "text">   <label>mot de pass</label>  <input name="pass" type= "password">
 <input class= "button" type="submit" value = "connection">
</div>


</form>

<?php
if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && 
    isset($_POST['pass']) && !empty($_POST['pass']) ){

$pseudo = $mysqli->real_escape_string($_POST['pseudo']);

$pass = $mysqli->real_escape_string($_POST['pass']);

$i = "SELECT COUNT(*)pseudo FROM membre WHERE pseudo = '$pseudo'";

$i2  = $mysqli->query($i);

$i3 = $i2->fetch_assoc();

$login = "SELECT pass FROM membre WHERE pseudo = '$pseudo'";

$login1 = $mysqli->query($login);

$login2 = $login1->fetch_assoc();

$valide = 0;

if($i3['pseudo'] == 1){
if (password_verify($pass, $login2['pass'])) {

session_start();

$_SESSION['pseudo'] = $pseudo;

$valide = 1;

echo '<meta http-equiv="refresh" content="0;url=index.php" /> ';

}
}
 
if($valide == 0){

echo "<center id = 'error' class = 'divheader'> erreur pseudo ou mot de pass incorrect </center>";

}
}

?>

