<?php 

$domaine = $_SERVER['SERVER_NAME'];

if($domaine == "localhost"){

$localhost = 1;

$protole = "http://";

$domaine = $domaine."/vecchionet.com/";

}else{

$domaine = "vecchionet.com";

$protole = "https://";

$localhost = 0;

}

$domaine = $protole.$domaine;


$linkstyle = $domaine."/style/style.css";

?>

<script>
 var mobile = 0;

 if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

mobile = 1;

}

</script>

<head>

<link rel = "stylesheet" href = "<?php echo $linkstyle;?>">
 
<link rel = "icon" href = "<?php $icon ?>" >

<script src = "./javascript/onglet.js"> </script>

<meta charset = "UTF-8">

<?php

$des = "
creation et entretien de siteweb &agrave; porto-vecchio;
";


 ?>

<meta name = "description" content = "<?php $des ?>" >

<meta name="viewport" content="width=device-width, initial-scale=1.0">     


<title>

<?php 
echo $title = "vecchionet";
?>

</title>
  


</head>
