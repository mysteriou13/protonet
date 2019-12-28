
function display(id,dis){

var div = document.getElementById(id);

 div.style.display = dis;

}

function changedisplay(i){

var div = document.getElementById(i);

var dis = div.style.display;

if(dis == "block"){

div.style.display = "none";

}else{

div.style.display = "block";

}

}


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

function affichediv(id,url,type,order){

var i = id;

var div = document.getElementById('ongletliste').getElementsByTagName('div');

var list  =  document.getElementById('ongletliste').getElementsByTagName('div').length;

var nbdiv = list;

var debut  = -1;

var liste = "list";


id = list.id;

while(debut < nbdiv-1){

 debut++;

 var div = document.getElementById('ongletliste').getElementsByTagName('div')[debut];

var ida   = div.id;

var div1 = div.style.backgroundColor;

var thisid = document.getElementById(i);
 

div.style.backgroundColor = "blue";

var l = liste+ida;

var a =  document.getElementById(l);

a.style.display = "none";

}

var listediv ="list"+i; 

 divliste = document.getElementById(listediv);

 divliste.style.display = "block"; 

 thisid = document.getElementById(i);

thisid.style.backgroundColor = "darkblue";


document.location.href = url+"listfichier.php"+"?"+type+"="+order;

}

