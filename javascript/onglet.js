
function changebackgroundcolor(iddiv,backcolor,descolor){

var  div = document.getElementById(iddiv);

if(div.style.backgroundColor == backcolor){

 div.style.backgroundColor = descolor;

}else{

 div.style.backgroundColor = backcolor;

}

}


