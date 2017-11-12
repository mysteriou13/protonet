
<?php 

$nb1 = mb_substr_count($monUrl, "site6");

if($nb1 == 1){

$pageproduit = "./pageproduit.php";


}else{

$pageproduit = "./site6/pageproduit.php";

}


$c = $_GET['categorie'];

if(empty($c)){

$c = 1;

} 

 $lienproduit='http://www.vecchionet.com/site6/pageproduit.php?produit='.$s4.'&page='.$pagea.'&categorie='.$c;
?>

<div id = "site6a7">
<a  href = "<?php echo $lienproduit?>">
<?php


echo "clicker pour agrandir";


?>

</a>
</div>
