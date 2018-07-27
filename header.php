<?php

include_once("./install/connect.php");

?>


<header style = "background-color:DarkBlue;">
<div  style = "">

<h1 style = "color:white; font-size:2em;">
<center>
vecchionet
</br>
hebergeur de service libre  et etique corse 
</center>
</h1>


<div style = "

font-size:2em;
display:flex;
justify-content:space-between;
flex-wrap: wrap;
">

<div>

<a id = "b"  href = 'https://www.vecchionet.com/index.php'>
accueil
</a>
</div>

 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

<div>
  <a id = "b"  href = 'https://www.vecchionet.com/listservice.php'>
liste des service
</a>

</div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div>

      <a id = "b"  href = 'https://www.vecchionet.com/CGU.php'>
CGU
</a>


</div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div>

 <a id = "b" href = 'https://www.vecchionet.com/soutenir.php'>
soutenir
</a>


</div>


 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div>
         <a id = "b"   href ='https://www.vecchionet.com/legal.php'>
mention legal
</a>

</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div>
<?php 

if(isset($_SESSION['pseudo'])){

include_once("divdeconnect.php");

}

?>
</div>


<?php

if(isset($_SESSION['pseudo'])){

include_once("divfichier.php");

}

?>

<div id = "inscription" style  = "  margin-top:20px; display:flex;  justify-content: center; width:100%;">

<?php

if(!isset($_SESSION['pseudo'])){

include_once("forminscription.php");

}


 ?>

</div>


</header>

