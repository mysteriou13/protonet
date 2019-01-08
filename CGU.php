<html>
<body >
<?php
session_start();
include_once("header.php");
include_once("head.php");

$link = "";


if($localhost == 1){

$link =  "http://".$_SERVER['SERVER_NAME']."/document"; 

}else{

 $link =  "https://document.vecchionet.com"; 

}

  $src = $link."/CGU.html";

?>

</br>
</br>

<p id = "CGU">

</p>

  <iframe src = "<?php echo $src;?>" id = "b" >
  </iframe>

</body>
</html>
