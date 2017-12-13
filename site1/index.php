


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

$file = "./des.php";

$site= "site1";


if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}

$lien3 = getcwd();

$lien3 = str_replace("site1","",$lien3);

$lien3 = $lien3."/fonction/url.php";

include_once($lien3);


$lien2 = new lien();

$url =  $lien2->url("1");



$url1 = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

      if (stristr($_SERVER['HTTP_USER_AGENT'], "Android")
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPod")
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") )
   {
  
 
    $c = "80";

 if($url1 == "http://www.vecchionet.com/index.php" or $url1 == "http://vecchionet.com/index.php"){

   $c = "20";

  }  

}else{

 $c = "70";

}

$url = htmlspecialchars($url);

?>


<center>
<a href = "<?php echo $url;?>"><?php echo $des1?></a>
</center>



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
