<html>
<body>
<?php
include_once("head.php");
include_once("header.php");
include_once("./install/connect.php");

$validepseudo = 0;
$validepass = 0;
$valideemail = 0;
$display = "none";

$date = date("dmY");

$date = $mysqli->real_escape_string($date);
 

?>


<h1 id  = "inscription">

   <p>

  <center id = "b">
  inscription
  </center>
   </p>

</h1>


<div id = "b" style = "display:flex; justify-content:space-around;">

  <div id = "b" style = "font-size:2em;">
 basic 0 euro par mois
  <div style = "display:flex; justify-content:column">
 

  </div>

</div>


<div id = "b" style = "font-size:2em;">

premium 5 euro par mois
  <div style = "display:flex; justify-content:column">

  </div>


  <div>

  </div>
</div>


</div>

<script>

var a = document.getElementById("connection");

a.style.display = "none";

</script>



</body>
</html>
