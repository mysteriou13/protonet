
<?php 

echo $site6a1;

if($site6a1 == 0){

$pageproduit = "./site6/pageproduit.php";

}

?>



<div  id = "site6a7" onclick = "reply(<?php echo $s4;?>,'produit','<?php echo $pageproduit;?>')" >
<?php


$nb1 = mb_substr_count($monUrl, "site6");


if( $nb1 == 1){

echo "clicker pour agrandir";

}

?>

</div>

