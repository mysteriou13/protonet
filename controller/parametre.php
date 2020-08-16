<html>

<body>

<?php 

require("../section/head.php");

require("../controller/header.php");

require("../model/modelparametre.php");

require("../view/afficheparametre.php");

?>

<script src= "../script/parametre.js"> </script>

<script>

var path = window.location.hash;

var path1 = path.split("#");

var listediv = ['parametre','nextcloud'];

var listebutton = ['buttonparametre','buttonnextcloud'];

var listesousdiv = ['perso', 'thiercloud'];

var par = new parametre(listebutton,listediv,listesousdiv);

</script>

</body>
</html>
