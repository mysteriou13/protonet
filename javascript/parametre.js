
class parametre{

constructor(){

document.getElementById('buttonparametre').style.backgroundColor ="darkblue";

var comptenext = document.getElementById('comptenextcloud');

comptenext.style.fontSize="1em";

comptenext.style.marginTop = "0%";

comptenext.style.margin = "1%";


var list = document.getElementById("listebutton");
          
list.style.display="flex";

var path  = window.location.hash.substr(1);

if(path == ''){

this.affiche('parametre','buttonparametre');

}else{

this.affiche(path,'button'+path);

}

}


 affiche(id,idbutton){
var button = ['parametre','nextcloud'];

var listebutton = ['buttonparametre','buttonnextcloud'];

document.location.href="parametre.php#"+id;

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

}
