
class boutonpaypal{


  constructor(){

 document.getElementById("paypal").style.display = "none"; 
 document.getElementById("divpass").style.display = "none";
 document.getElementById("passperso").style.display = "none";
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
var type= null;

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

if(type == "perso"){

admin = createur.value;

groupename = "perso";

 
}

if(newpass == true){

password = passcourant.value;

}


if(passcloud.checked == true && nb.value != "" || newpass.checked == true && 
nb.value != "" && passcourant.value != ""){

paypal.style.display = "block";

var next = "next"+"_"+admin+"_"+display+"_"+groupename+"_"+username+"_"+email+"_"+quota+"_"+home+"_"+"_"+password+"_"+displayname+"_"+active+"_"+disable+"_"+avatar+"_"+salt+"_"+createur.value;

item.value = next;

}else{

paypal.style.display = "none";


}


} 
 dis(){
  var passperso = document.getElementById("passperso");
  var perso = document.getElementById("perso");
  var newpass = document.getElementById("newpass");
  var divpass = document.getElementById("divpass");

  if(perso.checked == true){

   passperso.style.display = "block"; 

  }else{

 passperso.style.display = "none";


  }

if(newpass.checked == true){

divpass.style.display = "block";

}else{

divpass.style.display = "none";

}

}

}

