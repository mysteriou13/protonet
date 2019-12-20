<html>
<body>
<?php
include_once("head.php");
include_once("header.php");

$validepseudo = 0;
$validepass = 0;
$valideemail = 0;
$display = "none";
$wrap = null;
$date = date("dmY");
$date = $mysqli->real_escape_string($date);

if($mobile == true){

$wrap = "wrap";

}else{

$wrap = "nowrap";

}

?>


<h1 id  = "inscription">

   <p>

    <center  id = "b3">
     inscription
    </center>
   </p>

</h1>

<?php

include("forminscription.php");
?>
<script>

var a = document.getElementById("connection");

a.style.display = "none";

</script>



</body>
</html>
