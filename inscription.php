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

    <center style = "border:2px solid white; border-radius:25px;" id = "b">
     inscription
    </center>
   </p>

</h1>


 <div  style = " color:white;  display:flex; flex-wrap:<?php echo $wrap;?>;  justify-content:space-around;">
<div style  = " 
<?php 

if($mobile == false){

echo "margin-right:1%;";

}

?>
background-color:darkblue; border:2px solid white; border-radius:25px;  font-size:2em" >
   <div>
 
    <center style = "background-color:blue; margin:3%; border:2px solid  white; border-radius:25px; ">
      <strong>
     basic 0 euro par mois
     </strong>
    </center>

     <div>

        <div style = " background-color:blue; margin:3%;  border:2px solid white; border-radius:25px">
        <center> 1 mois de premium </center>
        </div>
       
        <div style = "background-color:blue; margin:3%; border:2px solid white; border-radius:25px; ">
        <center>
        rangement des  documents dans le classeur
       </center>
     </div>
  
     </div>

   <div style = " background-color:blue;  padding-right:5%;  border:2px solid white; border-radius:25px;">
<center>
   <a href = "aboinscription.php?mode=basic" style  = "color:white;"> devenir basic </a>
</center> 
 </div>

   </div>
 
   </div>


  <div style = " display:flex; flex-wrap:wrap; background-color:darkblue;   border:2px solid white; border-radius:25px;  font-size:2em;">

<div>

 <center style = "background-color:blue; margin:3%; border:2px solid  white; border-radius:25px; ">

 <strong>

premium 5 euro/mois

</strong>
 </center>

  <div >
   
     <div style = "background-color:blue; margin:3%;border:2px solid white; border-radius:25px">
   <center>  
   tout les avantage du basic
  </center> 
 </div>
  
   <div style = "background-color:blue; margin:3%;border:2px solid white; border-radius:25px">
<center>
   accés a la terraliberta(espace de travail numérique et colaboratif)
  </center>
 </div>   


     <div style = "background-color:blue; margin:3%; border:2px solid white; border-radius:25px;">
<center>
   <a href = "aboinscription.php?mode=premium" style  = "color:white;"> devenir premium </a>
</center>
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
