

<div  style = "background-color:white; padding-bottom:30%;  border:1px solid black; margin:1%;  ">
<?php 

$nb1 = mb_substr_count($monUrl, "site6");


if($nb1 == 1){

$pageproduit = "./pageproduit.php";


}else{

$pageproduit = "./site6/pageproduit.php";

}


if(isset($_GET['categorie'])){

$c = $_GET['categorie'];

}else{

$c = 1;

}



 $lienproduit=$url;

 if(!isset($_GET['categorie'])){
  $lienproduit = $lienproduit."/pageproduit.php?categorie=1&page=1&produit=".$s4;
  }else{
   $lienproduit = $lienproduit."&produit=".$s4;
   $lienproduit =  str_replace("index.php","site6/pageproduit.php",$lienproduit);
}
  
$lienproduit = str_replace("#site6","",$lienproduit);

$lienproduit = str_replace("/site6/site6","/site6",$lienproduit);

?>

<a  href = "<?php echo $lienproduit?>">
<?php


echo  "cliquer pour agrandir";

?>
</a>

</div>
