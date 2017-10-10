
<?php

$file = "./des.php";

$site= "site4";

if(file_exists($file)){
include_once("./des.php");

}

if(file_exists("../des.php")){

include_once("../des.php");

}


$lien3 = getcwd();

$lien3 = str_replace("site4","",$lien3);

$lien3 = $lien3."/fonction/url.php";

include_once($lien3);

$lien2 = new lien();

$url =  $lien2->url("4");

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$page = str_replace("/site4","",getcwd());



?>

<center>
<a href = "<?php echo $url; ?>" ><?php echo  $des1;  ?></a>
</center>

<link rel = "stylesheet" href = "http://localhost/protonet/site4/style/style.css">

<div id = "site4a7" style= "background-color:rgb(164,249,112);"  alt="Description"  >


<div id = "site4a2">


</div>

</div>
