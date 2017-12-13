
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

$url = htmlspecialchars($url);

$lien = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$lien = htmlspecialchars($lien);

$page = str_replace("/site4","",getcwd());

$header = $page."/site4/section/header.php";

$header = htmlspecialchars($header);

$accueil = $page."/site4/section/accueil.php";

$accueil = htmlspecialchars($accueil);

$nav = $page."/site4/section/nav.php";

$nav = htmlspecialchars($nav);

$contact= $page."/site4/section/contact.php";

$contact = htmlspecialchars($contact);

$propos = $page."/site4/section/propos.php";

$propos = htmlspecialchars($propos);

$footer = $page."/site4/section/footer.php";

$footer = htmlspecialchars($footer);


?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">


<center>
<a href = "<?php echo $url; ?>" ><?php echo  $des1;  ?></a>
</center>

<link rel = "stylesheet" href = "http://www.vecchionet.com/site4/style/style.css">

<div style= "background-color:rgb(164,249,112); "  alt="Description"  >
<?php 

include_once($header);

?>

<div id = "site4a2">

<?php 
if(isset($_GET['parametre4']) && !empty($_GET['parametre4'])){

if($_GET['parametre4'] == 2){

include($contact);

}

if($_GET['parametre4'] == 3){

include($propos);

}
}else{

include($accueil);
}
?>
</div>
<?php 
include($footer);

?>

</div>
