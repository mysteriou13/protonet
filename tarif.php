<html>
<?php 
include("./head.php");
?>
<body>

<?php 
include("./header.php");
?>

<script type="test/javascript" src = "./script/mobile.js">

</script>

<script>

var mob =  new mobile();

</script>

<center>
<div class ="b4">

<u>tarif</u>

</div>

</center>


<div id = "tarif" class = "b4" >

<div  id = "tarif1" class = "b6">
tarif1
</div>

<div  id = "tarif2" class = "b6">
tarif1
</div>

<div  id = "tarif3" class = "b6">
tarif1
</div>

<div  id = "tarif4" class = "b6">
tarif1
</div>



</div>

</div>

<script>

var tar = document.getElementById("tarif");


if(mob.typescreen() == 0){

tar.style.display="flex";
tar.style.height="100%";


}else{

tar.style.justifyContent = "space-between";

tar.style.padding = "1%";

}

var tar1 = document.getElementById("tarif1"); 


if(mob.typescreen() == 0 ){

tar1.style.paddingLeft = "4%";

tar1.style.margin = "1%";

tar1.style.width = "100%";

}

var tar2 = document.getElementById("tarif2"); 


if(mob.typescreen() == 0){

tar2.style.paddingLeft= "4%";
tar2.style.margin = "1%";
tar2.style.width="100%";


}

var tar3 = document.getElementById("tarif3"); 


if(mob.typescreen()  == 0){

tar3.style.paddingLeft = "4%";
tar3.style.margin = "1%";
tar3.style.width = "100%";


}

var tar4 = document.getElementById("tarif4"); 

tar4.style.width = "100%";

if(mob.typescreen() == 0){

tar4.style.paddingLeft = "4%";
tar4.style.margin = "1%";

}

</script>


</body>
</html>
