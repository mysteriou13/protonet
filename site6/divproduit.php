
<?php 

$nb1 = mb_substr_count($monUrl, "site6");

if($nb1 == 1){

$pageproduit = "./pageproduit.php";


}else{

$pageproduit = "./site6/pageproduit.php";

}

?>



<div  id = "site6a7" onclick = "
reply(<?php echo $s4;?>,'produit','<?php echo $pageproduit;?>','<?php echo $categorie1; ?>',
<?php echo $pagea;?>,)" >

<?php

if( $nb1 == 1){

echo "clicker pour agrandir";

}

?>

</div>

