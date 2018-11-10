
<?php 

$link = "";


if($localhost == 1){

$link =  $_SERVER['SERVER_NAME']."/document"; 

}else{

 $link =  "document.vecchionet.com"; 

}

  $src = $protocole.$link."/presentation.html";


?>

<iframe src  ="<?php echo $src?>" style = "height:100%; width:100%; background-color:blue">

</iframe>
