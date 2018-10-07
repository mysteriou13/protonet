
function changebackgroundcolor(iddiv,backcolor,descolor){

var  div = document.getElementById(iddiv);

if(div.style.backgroundColor == backcolor){

 div.style.backgroundColor = descolor;

}else{

 div.style.backgroundColor = backcolor;

}

}


function ongleturl(onglet){

var url = window.location.host;

var protocole =  null; 

var file = null;

var  link = null;

var get = "?onglet="+onget; 

var page = "listfichier.php";

if(url =="localhost"){

url = "localhost";

protocole = "http:/";

file = "/vecchionet.com/";

link = protocole+url+file+page;

}else{

protocole = "https://";

link = protocole+file+page;

}

}

