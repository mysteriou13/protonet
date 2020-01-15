
class parametre{

constructor(){

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
