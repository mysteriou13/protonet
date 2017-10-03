
<link rel = "stylesheet" href = "http://localhost/protonet/site1/style/style.css">

<?php 


 $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

 $url = $monUrl;

$nb = mb_substr_count($monUrl, "site1");

if($nb == 1){

$des1 = "cliquer pour retourner a l'index";

$url = str_replace('site1/','#site1',$monUrl);;
}else{

$url = $url."site1/";

}


?>

<center>

<a href = "<?php echo $url;?>"><?php echo $des1?> </a>

</center>

<div id = "conteneur1" style = " width:100% height:100%; background-image: url(http://localhost/corsicanet/coiffure.jpeg); background-repeat:no-repeat;  background-size: 100% 100%; " >

<div id = "c1" >
<center>
votre titre

</center>

<div id = "c4">

</div>

</div>



<div id = "c2" >

<div style = "
width:70%;
border:1px solid;
margin:1%;
">
votre text
</div>

<div
style = "
width:28%;
border:1px solid;
margin:1%;
";
>
complement text
</div>

</div>

<div id = "c3">
mention l&eacute;gal
</br>
</ br>
</div>
</div>

