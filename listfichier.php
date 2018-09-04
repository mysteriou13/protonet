<html>
<body>
<?php
session_start();

include("head.php");

include("header.php");

?>

<div >
<center style  = "font-size:2em; margin:1em">

<div>
<strong id = "b">

 liste des documents

</strong>
</br>

</center>

</div>

<div  style  = " background-color:blue; border-radius:20px;  font-size:2em;  display:flex; justify-content:space-around;">
 
<?php 


$pseudo = $mysqli->real_escape_string($_SESSION['pseudo']);


$list = "SELECT * FROM url WHERE pseudo = '$pseudo'";

$list2 = $mysqli->query($list);

$type = null;

$link = null;

$lien = null;

$name = null;


?>

<div>
<?php    while($liste3 = $list2->fetch_assoc() ){


echo "<div id = 'b'>";

echo "type";

echo "</div>";

echo "</br>";

}

?>



</div>

<div>

<?php


   $list = "SELECT * FROM url WHERE pseudo = '$pseudo'";

$list2 = $mysqli->query($list);

while($liste3 = $list2->fetch_assoc() ){


echo "<div id = 'b'>";

echo $liste3['type'];

echo "</div>";

echo "</br>";

}

?>


</div>


<div>
     <?php

  $list = "SELECT * FROM url WHERE pseudo = '$pseudo'";

$list2 = $mysqli->query($list);

while($liste3a = $list2->fetch_assoc() ){

$url = $liste3a['url'];

echo "<div id = 'b'>";

echo"<a href = '$url';  id = 'b'>"; echo $liste3a['name']; echo "</a>";

echo "</div>";

echo "</br>";

}

?>

</div>

</div>

</body>
</html
