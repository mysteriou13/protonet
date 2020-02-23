<html>
<body>

<?php 

include_once("head.php");
include_once("header.php");
?>


<table>

<tr>
<td id="td">
responsable du site
</td>
</tr>

<tr>
<td id="td">nom :massa</td>

</tr>

<tr>

<td id="td" >

email:mrmassaanthony@gmail.com

</td>

</tr>


<tr>

<td id ="td">
adress:casa d'arutoli rte de muratello bat i apt 43 20137 porto-vecchio

</td>

</tr>

</table>

<script type="text/javascript" src="./script/mobile.js">

</script>

<script>

if(mobile == 1){
var td = document.getElementsByTagName("td");

td[0].style.fontSize="1.3em";

for(var i =0; i<td.length; i++){

td[i].style.fontSize = "1.3em";

td[i].style.paddingLeft = "0%";

}

}

</script>

</body>
</html>


