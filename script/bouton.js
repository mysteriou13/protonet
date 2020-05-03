

function changetype(type){

  var nb = document.getElementById('nb');

    document.getElementById('sub').type = 'submit';

var type = null;  
   url = "./paypal.php";
 var radios = document.getElementsByName('perso');

for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
         if(radios[i].value != null){
         rad = 1;
         type = radios[i].value;
        
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}


if(type != null && nb.value == ""){

type = "?type="+type;

url  = url+type;

}

if(nb.value != "" && type == null){


url = url+"?nb="+nb.value;

}

if(nb.value != "" && type != null){

url = url+"?type="+type+"&nb="+nb.value;

}

     window.location.replace(url);
    
 
}

function dis(id){
  var url = window.location.href; 
  var radnull = document.getElementById("radionull"); 

  var radios = document.getElementsByName('perso');
  var dis =  document.getElementById(id);
  var radnull = document.getElementById("radionull");
  var nb = document.getElementById("nb");
  var rad = 0;
  var type = null;
   var url = "./paypal.php"; 
for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
         if(radios[i].value != null){
         rad = 1;
         type = radios[i].value;
        
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}


if(type != null && nb.value == ""){

type = "?type="+type;

url  = url+type;

}

if(nb.value != "" && type == null){

url = url+"?nb="+nb.value;

}

if(nb.value != "" && type != null){


url = url+"?type="+type+"&nb="+nb.value;

}



window.location.replace(url);


}




