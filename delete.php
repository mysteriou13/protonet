
<?php 

class suprimer(){


function  supcalc($redis,$file){

 $del1 = "snapshot-".$file;

 $del2 = "ecell-".$file;

 $del3 = "log-".$file;


 $redis->del($del1);
 $redis->del($del2);
 $redis->del($del3);

}


}

?>

