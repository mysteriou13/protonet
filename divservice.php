<div  class = "divservice">
<?php

$service = "listservice.php#service";

$page = $service;

if($localhost == 0){

$page = "/".$service;


}

$link1 = $link.$page;
?>
  <a id = "b"  href = '<?php echo $link1; ?>'>
liste des service
</a>

</div>


