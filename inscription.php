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


 <div  style = "color:white;  display:flex; justify-content:space-around;">

   <div  style = "background-color:blue; border:2px solid white; border-radius:25px; margin-right:1%; font-size:2em;">
 
    <center>
      <strong>
     basic 0 euro par mois
     </strong>
    </center>

     <div style = " display:flex; flex-wrap:wrap; justify-content:column">

        <div style = " border:2px solid white; border-radius:25px">
        1 mois de premium
        </div>
       
        <div style = "width:100%;  border:2px solid white; border-radius:25px; ">
        classement des  document dans le classeur
        </div>
 
     </div>

    </div>

  <div style = "background-color:blue; padding:1%; border:2px solid white; border-radius:25px;  font-size:2em;">
  <center>
  <strong>
   premium 5 euro par mois
  </strong>
   </center>  
   <div style = "display:flex; flex-wrap:wrap; justify-content:column">
    
     <div style = " border:2px solid white; border-radius:25px">
     tout les avantage du basic
    </div>
  
   <div style = " border:2px solid white; border-radius:25px">
   accés a la terraliberta(espace de travail numérique et colaboratif);
   </div>   

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
