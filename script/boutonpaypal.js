
class boutonpaypal{


  constructor(){

 document.getElementById("paypal").style.display = "none"; 
 document.getElementById("divpass").style.display = "none";
 document.getElementById("passperso").style.display = "none";
 document.getElementById("passthier").style.display = "none";
 document.getElementById("divnb").style.display = "none";
 document.getElementById("passcloud").checked = true;

var textnb = document.getElementById("textnb");

}

div(){

var newpass = document.getElementById("newpass");
var passcloud = document.getElementById("passcloud");
var passcourant = document.getElementById("passcourant");
var nb = document.getElementById("nb");
var paypal = document.getElementById("paypal");
var item = document.getElementById("custom"); 
var createur = document.getElementById("pseudo");
var radios = document.getElementsByName("perso");
var pass = document.getElementsByName("passcloud");
var divpass = document.getElementById("divpass");
  var rad = document.getElementsByName("rad");


var typepass = null;
var type = null;
var typerad = null;

var admin = null;
var display = "test";
var groupename = null;
var username = createur.value;
var email = document.getElementById("email").value;
var quota = nb.value;
var home = "/var/www/html/nextcloud/data/";
var password ="courant";
var displayname = "test";
var active = true;
var disable = "true";
var avatar = "avatar";
var salt = "salt";


  for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
        if(radios[i].value != null){
         type = radios[i].value;
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}

  for (var i = 0, length = pass.length; i < length; i++) {
    if (pass[i].checked) {
        // do whatever you want with the checked radio
         if(pass[i].value != null){
         typepass = pass[i].value;
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}
  for (var i = 0, length = rad.length; i < length; i++) {
    if (rad[i].checked) {
        // do whatever you want with the checked radio
         if(rad[i].value != null){
         typerad = rad[i].value;
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}



if(type == "perso"){

admin = createur.value;

groupename = "perso";
 
}

if(divpass.style.display == "block"){

password = passcourant.value;

}else{

password = "courant";

}



if(passcloud.checked == true && nb.value != "" && typepass == "passcourant" 
|| type == "thier"  && nb.value != "" || typepass == "newpass" && nb.value != "" && newpass.value != "" && divpass.style.display == "block" && passcourant.value != ""){


paypal.style.display = "block";
var next = "next"+"_"+admin+"_"+display+"_"+groupename+"_"+username+"_"+email+"_"+quota+"_"+home+"_"+password+"_"+displayname+"_"+active+"_"+disable+"_"+avatar+"_"+salt+"_"+createur.value+"_"+type+"_"+typerad;

item.value = next;

}else{

paypal.style.display = "none";


}


} 
 dis(){

var newpass = document.getElementById("newpass");
var passcloud = document.getElementById("passcloud");
var passcourant = document.getElementById("passcourant");
var nb = document.getElementById("nb");
var paypal = document.getElementById("paypal");
var item = document.getElementById("custom"); 
var createur = document.getElementById("pseudo");
var radios = document.getElementsByName("perso");
var pass = document.getElementsByName("passcloud");
var divpass = document.getElementById("divpass");

var type = null;
var typepass = null;

var admin = null;
var display = "test";
var groupename = null;
var username = createur.value;
var email = document.getElementById("email").value;
var quota = nb.value;
var home = "/var/www/html/nextcloud/data/";
var password ="courant";
var displayname = "test";
var active = true;
var disable = "true";
var avatar = "avatar";
var salt = "salt";


  var passperso = document.getElementById("passperso");
  var perso = document.getElementById("perso");
  var thier = document.getElementById("thier");
  var newpass = document.getElementById("newpass");
  var divpass = document.getElementById("divpass");
  var passthier =  document.getElementById("passthier");
  var passthier =  document.getElementById("passthier");
  var rad = document.getElementsByName("rad");

  var typerad = null;


  for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
         if(radios[i].value != null){
         type = radios[i].value;
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}

  for (var i = 0, length = pass.length; i < length; i++) {
    if (pass[i].checked) {
        // do whatever you want with the checked radio
         if(pass[i].value != null){
         typepass = pass[i].value;
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}

  for (var i = 0, length = rad.length; i < length; i++) {
    if (rad[i].checked) {
        // do whatever you want with the checked radio
         if(rad[i].value != null){
         typerad = rad[i].value;
        }
        // only one radio can be logically checked, don't check the rest
        break;
    }
}


 if(passcloud.checked == true && nb.value != "" && typepass == "passcourant" 
|| type == "thier"  && nb.value != "" || typepass == "newpass" && nb.value != "" && newpass.value != "" && divpass.style.display == "block" && passcourant.value != ""){


paypal.style.display = "block";
var next = "next"+"_"+admin+"_"+display+"_"+groupename+"_"+username+"_"+email+"_"+quota+"_"+home+"_"+password+"_"+displayname+"_"+active+"_"+disable+"_"+avatar+"_"+salt+"_"+createur.value+"_"+type+"_"+typerad;
item.value = next;

}else{

paypal.style.display = "none";


}

if(type == "thier"){

divnb.style.display = "block";

textnb.innerHTML = "nombre de compte";

}else{

divnb.style.display = "none";


}

 if(perso.checked == true){

if(typerad != null){

 document.getElementById("divnb").style.display = "block";

}

   passperso.style.display = "block"; 
   if(typerad == "sto"){   
   textnb.innerHTML = "nombre de gigaotect"; 
   }

  if(typerad == "abo"){
  textnb.innerHTML = "nombre de mois";

   }

  }else{

 passperso.style.display = "none";
  

  }

 if(thier.checked == true){
 
 passthier.style.display = "block";
 textnb.innerHTML = "nombre de compte"; 

 }else{
 
 passthier.style.display = "none";

}

if(newpass.checked == true){

divpass.style.display = "block";

}else{

divpass.style.display = "none";

}

}

}

