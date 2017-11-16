

<div  style = "background-color:siler; height:10%; border:1px solid black; margin:1%; ">
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

<a  href = "<?php echo $lienproduit?>">
<?php


echo "clicker pour agrandir";


?>

</a>
</div>
