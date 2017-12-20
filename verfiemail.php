
<html>
<body>
<?php 
session_start();
$d = "verfication de l'email";

include("./head.php");

include("./header.php");

include_once("email.php");

?>

<div id = "contact" style = "height:100%">


<center style = "color:white; font-size:2em;">
un email de verification vous a etais envoy&eacute; 
</br>
penser a regarder dans les spams
</br>
</center>


<?php


$pseudoemail = $connect->real_escape_string($_SESSION['pseudo']);
 
$selemail = "SELECT email FROM membre WHERE pseudo  = '$pseudoemail'";

$queryemail = $connect->query($selemail);

$row = $queryemail->fetch_assoc();

$destinataire = $row['email'];

$subject =  "validatation email ";

$lienemail = "<a href = 'emailvalide.php?email=$destinataire'>confimer votre email</a>";
 
$message = $lienemail;

Email($destinataire,$subject,$message);



?>

</div>

</br>

<?php 

include_once("footer.php");

?>

</body>
</html>
