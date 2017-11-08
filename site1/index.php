


               <meta name="viewport" content="width=device-width, initial-scale=1.0">

               <style>
.c{

   display: flex;
   justify-content:space-around;

    flex-direction: column;


}

.c:nth-child(1)

{


}

</style>

<?php 

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

echo $url;

      if (stristr($_SERVER['HTTP_USER_AGENT'], "Android")
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPod")
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") )
   {
  
 
    $c = "80";

 if($url == "http://www.vecchionet.com/index.php" or $url == "http://vecchionet.com/index.php"){

   $c = "20";

  }  

}else{

 $c = "70";

}

?>

<div style = "background-color:white;">    

<div style = "
background-repeat: no-repeat;
 background-size: 100%; 100%;
">
 
<div style = "

opacity:0.8;
background-color:silver;
    height: 5%;
margin-bottom:2%;
   border: 2px solid;
border-radius: 10px;



">

header

</div>

<div style = "

opacity:0.8;

height: <?php echo $c?>%;

background-color:silver;

border: 2px solid;

border-radius: 10px;

">


article


</div>

<div style = " 
width:100%;
height:5%;
margin-top:2%;
background-color:silver;
  border: 2px solid;
border-radius: 10px;

">
footer
</div>

</div>
