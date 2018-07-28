<html>
<body>
<?php
session_start();

include("head.php");

include("header.php");

?>

<div id = "b">


<?php 


$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);


$list = "SELECT * FROM url WHERE pseudo = '$pseudo'";

$list2 = $mysqli->query($list);



while($liste3 = $list2->fetch_assoc() ){

 echo '<div style = "display:flex; justify-content:space-around; font-size:2em;">';

   echo "<div> type </div>";
  echo "<div>";
 echo $liste3['type'];
echo "</div>";

echo "<div> name </div>";

echo "<div>";

$lien = $liste3['url'];

echo "<a href = '$lien' id = 'b'>"; echo $liste3['name']; echo "</a>";
echo "</div>";


echo '</div>';


}

?>

</div>

</body>
</html
