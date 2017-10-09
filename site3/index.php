
<link rel  = "stylesheet" href = "http://localhost/corsicanet/site3/style/style.css">

<?php

$file = "./des.php";

$site= "site3";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}

?>

<center>
<a href = "<?php echo $url?>"><?php echo  $des1; ?></a>
</center>

<div   alt="Description" >
<div style = "background-color:gray; color:white; ">
<?php 

include_once("./section/header.php");

?>

<div id = "site3a2" >

</div>





</div>
</div>

