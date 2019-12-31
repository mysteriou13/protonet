
<?php 

$link = "";


if($localhost == 1){

$link =  "http://".$_SERVER['SERVER_NAME']."/document"; 

}else{

 $link =  "https://document.vecchionet.com"; 

}

  $src = $link."/presentation.html";

?>


<iframe  src  ="<?php echo $src?>" style = "height:100%; width:100%; background-color:blue">

</iframe>
