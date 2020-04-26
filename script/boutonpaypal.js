 function dis(id){

  var radios = document.getElementsByName('perso');
  var dis =  document.getElementById(id);
  var radnull = document.getElementById("radionull"); 
   var rad = 0;

for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
         if(radios[i].value != null){
         rad = 1;
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}



if(rad == 1){
if(dis.style.display == "none"){
 dis.style.display = "block";
radnull.innerHTML = "";
 
   }  
 }if(rad == 0){

radnull.innerHTML = "error choisir un type de compte";
  
}

}


var pay = document.getElementById("paypal");

var compte = document.getElementById("perso");

pay.style.display = "none";




