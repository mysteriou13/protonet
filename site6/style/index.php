 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
     <link rel = "stylesheet" href = "http://www.vecchionet.com/site6/style/style.css">  

<div style = "
background-color:white;
">

<?php 
$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

 $url1 =  substr_count($monUrl, '/site6');

?>


<style>

#site6a1{
<?php 

       if (stristr($_SERVER['HTTP_USER_AGENT'], "Android")
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPod")
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") )
   {
   if($url1 == 1 ){
   echo "height:100%";   
    }
   
}
?>
}



#site6a6{
  <?php                                                                                            
    if (stristr($_SERVER['HTTP_USER_AGENT'], "Android")                                        
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPod")                                               
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") )                                           
   {
    echo "height:auto";                                                                         
  }    

?>                                                                                         
}  

  #site6a7{                                                                                       

<?php
 
  if (stristr($_SERVER['HTTP_USER_AGENT'], "Android")                                           
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPod")                                               
   || strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") )                                           
   {
                                                                                                
  echo "height:7%;";                                                                         
                                                                                                
}                                                                                               
?>                                                                                                
}


<style>

</style>

   

<?php


$site= "site6";


if(file_exists('./site6/produit.php')){


}else{


}


$d = 1;

$id = "pageproduit.php?product=".$d;

?>

<script src="http://www.vecchionet.com/index.php/protonet/site6/javascript/reply_click.js" type="text/javascript"></script> 

<?php 

if(file_exists("./site6/header.php")){

include_once("./site6/header.php");

}else{

include_once("./header.php");

}

?>

<script>

function reply(d,c,p,ca,pagea){

document.location = p+'?'+c+"="+d+"&categorie="+ca+"&page="+pagea;
}


</script>

<?php 

$categorie = str_replace("#","",getcwd());

$categorie = str_replace("site6","",$categorie);

$categorie = $categorie."/site6/categorie.php";

if(isset($_GET['categorie']) && !empty($_GET['categorie'])){

$categorie1 = $_GET['categorie'];

}else{

$categorie1 = 1;

}

?>

<div>
<?php 

include($categorie);

?>


</div>

<center>

<?php 
$index = "./index.php";


while($s0 <= $page){

$s0++;

if($NB == 0){

$index = "?page=".$s0."&categorie=".$categorie1."#site6";

}else{
 $index = "./index.php?page=".$s0."&categorie=".$categorie1;
}
echo "<a href = '$index' >"; echo $s0; echo "</a>"; echo "&nbsp &nbsp &nbsp"  ;

}


if($s3 != $nbpage1){


$index = "?page=".$s0."&categorie=".$categorie1."#site6";


}



?>

</br>


</center>


<?php 

if(file_exists("./site6/footer.php")){

include_once("./site6/footer.php");

}else{

include_once("./footer.php");

}


?>
