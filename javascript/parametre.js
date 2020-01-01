var list = document.getElementById("listebutton");
          
list.style.display="flex";


document.getElementById('nextcloud').style.display = "none";

function affiche(id){
var button = ['parametre','nextcloud'];

for(var i = 0; i < button.length; i++){

var div =  document.getElementById(id);

if(id != button[i]){

 document.getElementById(button[i]).style.display ="none";

}else{

 document.getElementById(button[i]).style.display ="block";


}

}

}

