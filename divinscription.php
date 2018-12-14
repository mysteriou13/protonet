<div style = " background-color:blue;font-size:1.5em; border:2px solid white; border-radius:25px; padding:1%;">

<?php

$page = "inscription.php";

if($localhost == 0){

$page = "/".$page;

}


 $link1 = $link.$page."#inscription";
 ?>

 <a href = "<?php echo $link1; ?>" id = "b">inscription</a>

</div>
