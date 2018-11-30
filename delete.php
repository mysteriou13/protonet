<?php 

class  deletefile extends Redis {

function deletecal($file){

 $this->connect('127.0.0.1', 6379);

 $del1 = "snapshot-".$file."_formdata";

 $del2 = "audit-".$file;

 $del3 = "log-".$file;

 $del4 = "snapshot-".$file;

 $this->delete($del1);
 $this->delete($del2);
 $this->delete($del3);
 $this->delete($del4);



}

}

?>

