<?php 

class  deletefile extends Redis {

function deletecalc($file,$connect){

 $this->connect('127.0.0.1', 6379);

 $del1 = "snapshot-".$file."_formdata";

 $del2 = "audit-".$file;

 $del3 = "log-".$file;

 $del4 = "snapshot-".$file;

 $this->delete($del1);
 $this->delete($del2);
 $this->delete($del3);
 $this->delete($del4);

 $this->deleteurl($file,$connect);

}

function deleteurl($file,$connect){

$deleteurl = "DELETE FROM url  WHERE url  like '%$file%'"; 

$connect->query($deleteurl);


$deleteurl ="DELETE FROM calc WHERE name = '$file' "; 

$connect->query($deleteurl);


}

function deletepad($connect,$store,$file){

$delkey = "DELETE FROM `store` WHERE `store`.`key` like '%$file%' ";

$store->query($delkey);

$delvalue = "DELETE FROM `store` WHERE `store`.`value` like '%$file%' ";

$connect->query($delvalue);

$this->deleteurl($file,$connect);

}

}
?>

