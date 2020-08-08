<html>
<body >
<?php
include_once("./section/header.php");
include_once("./section/head.php");



if($localhost == null){

$link =  "http://".$_SERVER['SERVER_NAME']."/document"; 

}else{

 $link =  "https://document.vecchionet.com"; 

}

 $src = $link."/CGU.html";

?>

</br>
</br>

  <iframe src = "<?php echo $src;?>" id = "b" >
  </iframe>

</body>
</html>
