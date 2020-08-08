
<?php 

$link = "";


if($_SERVER['SERVER_NAME'] == "localhost"){

$link =  "http://".$_SERVER['SERVER_NAME']."/document"; 

}else{

 $link =  "https://document.vecchionet.com"; 

}

  $src = $link."/presentation.html";

?>


<iframe  src  ="<?php echo $src?>">

</iframe>
