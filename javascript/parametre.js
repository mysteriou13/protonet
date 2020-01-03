
document.getElementById('buttonparametre').style.backgroundColor ="darkblue";

var comptenext = document.getElementById('comptenextcloud');

comptenext.style.fontSize="1em";

comptenext.style.marginTop = "0%";

var list = document.getElementById("listebutton");
          
list.style.display="flex";


document.getElementById('nextcloud').style.display = "none";

function affiche(id,idbutton){
var button = ['parametre','nextcloud'];

var listebutton = ['buttonparametre','buttonnextcloud'];

  for(var i = 0; i < button.length; i++){


 if(id != button[i]){

 document.getElementById(button[i]).style.display ="none";
 

    }else{

 document.getElementById(button[i]).style.display ="block";


}

}

 for(var i = 0; i < listebutton.length; i++){

  if(idbutton == listebutton[i]){

   document.getElementById(idbutton).style.backgroundColor = "darkblue";

}else{
  document.getElementById(listebutton[i]).style.backgroundColor = "blue";



  }

  }

}

