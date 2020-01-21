
class parametre{

constructor(listebutton,listediv,listesousbutton,listesousdiv){

this.path(listebutton,listediv,listesousbutton,listesousdiv);

}


path(listebutton,listediv,listesousbutton,listesousdiv){

var path  = window.location.hash;

var path1 = path.split("#");

var nbpath = path1.length;

if(path1[1] == null){

path1[1] = "buttonparametre";

}

if(path1[2] == null){

path1[2] = "parametre";

}

if(path1[3] == null){
path1[3] = "comptenexloud";

}

this.affiche(path1[1],path1[2],listebutton,listediv,path1[3],listesousbutton,path1[4],listesousdiv);
}

 affiche(button,div,listebutton,listediv,sousbutton,listesousbutton,sousdiv,listesousdiv){


document.location.href ="#"+button+"#"+div+"#"+sousbutton+"#"+sousdiv;


 for(var i =0; i < listebutton.length; i++ ){

  if(listebutton[i]  == button){
  
  document.getElementById(listebutton[i]).style.backgroundColor = "darkblue";

  }else{

    document.getElementById(listebutton[i]).style.backgroundColor = "blue";

  }

  } 

  for(var i =0; i < listediv.length; i++ ){

  if(listediv[i]  == div){

  document.getElementById(listediv[i]).style.display = "block";

  }else{

    document.getElementById(listediv[i]).style.display = "none";

  }

  } 

 for( var i = 0; i < listesousbutton.length; i++){
  

  if(listesousbutton[i] == sousbutton){   
   document.getElementById(sousbutton).style.backgroundColor = "darkblue";

   }else{
   document.getElementById(listesousbutton[i]).style.backgroundColor = "blue";



 }




 }

  for(var i =0; i < listesousbutton.length; i++){
   
   if(sousdiv == listesousdiv[i]){
  
    document.getElementById(listesousdiv[i]).style.display = "block";
   
   }else{

 document.getElementById(listesousdiv[i]).style.display = "none";

   }

   }

}




}
