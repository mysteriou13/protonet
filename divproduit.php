
<?php

$lien = "suiviproduit.php?produit=".$produit2['id']."&nbproduit=".$d;


 ?>

<div style = ' display:flex; justify-content:space-between; border:1px solid; margin:1%; ' >
<div>

<?php

echo "commande nº".$d;

?>
</div>

<div>
<?php 

echo "type de site".$produit2['typesite'];

?>
</div>

<a style = "color:white;" href = "<?php echo $lien; ?>">

suivre la commande

</a>

</div>
</a>

