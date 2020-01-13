
class parametre{

constructor(){

var comptenext = document.getElementById('comptenextcloud');

var perso  =document.getElementById("perso");


document.getElementById('buttonparametre').style.backgroundColor ="darkblue";

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

perso.style.margin ="1%";

perso.style.padding = "1%";

perso.style.border = "solid";

perso.style.borderRadius =  "25px";

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

display(){

var div = document.getElementById("perso").style.display;

var dis = document.getElementById("perso");

if(dis.style.display === '' ||  dis.style.display == "block"){

dis.style.display ="none";

}else{

dis.style.display ="block";


}


}



}
