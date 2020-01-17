
class parametre{

constructor(button,listebutton,listdiv){

this.path(listdiv,listebutton);

}


path(lisdiv,listebutton){

var path  = window.location.hash;

var path1 = path.split("#");

var nbpath = path1.length;


if(nbpath == 1){

this.affiche('parametre',listebutton,button,listebutton,null);

}

if(nbpath == 2){

this.affiche(path1[1],listebutton,button,listebutton,null);

}

if(nbpath == 3){

this.affiche(path1[1],listebutton,listdiv,listebutton,path1[2],path1);

}

}



 affiche(id,idbutton,button,listebutton,sousid,tabid){

if(sousid == null){

document.location.href="parametre.php#"+id;
  for(var i = 0; i < button.length; i++){

 if(id == button[i]){

 document.getElementById(button[i]).style.display ="block";
 

    }else{

 document.getElementById(button[i]).style.display ="none";


}

}


}else{

  for(var i = 0; i < button.length; i++){

 if( id == button[i] ||  sousid == button[i]){

 document.getElementById(button[i]).style.display ="block";
 

    }else{

 document.getElementById(button[i]).style.display ="none";


}

}


document.location.href="parametre.php#"+id+"#"+sousid;

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
