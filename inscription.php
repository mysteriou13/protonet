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


 <div  style = "width:100%; color:white;  display:flex; flex-wrap:wrap  justify-content:space-around;">

   <div  style = "width:60%; padding:1%; background-color:blue; border:2px solid white; border-radius:25px; margin-right:1%; font-size:2em;">
 
    <center>
      <strong>
<u>
     basic 0 euro par mois
</u>
     </strong>
    </center>

     <div>

        <div style = " border:2px solid white; border-radius:25px">
        1 mois de premium
        </div>
       
        <div style =  "border:2px solid white; border-radius:25px; ">
        classement des  document dans le classeur
        </div>
 
     </div>

    </div>

  <div style = "display:flex; flex-wrap:wrap; background-color:blue; padding:1%; border:2px solid white; border-radius:25px;  font-size:2em;">

<div style = "width:100%;">
 <center>

 <strong>

<u>
premium 5 euro/mois
</u>
 </center>
</strong>
</div>

  <div>
   
     <div style = "border:2px solid white; border-radius:25px">
     tout les avantage du basic
   
 </div>
  
   <div style = "border:2px solid white; border-radius:25px">
   accés a la terraliberta(espace de travail numérique et colaboratif);
   </div>   
   
  </div>


      <div>

      </div>
  
   </div>

   </div>

   </div>

<script>

var a = document.getElementById("connection");

a.style.display = "none";

</script>



</body>
</html>
