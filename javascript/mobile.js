
function displaymobile(mobile,dis,id){

if(mobile == 0){
document.getElementById(id).style.display = dis; 
}

}

function changeclassmobile(id,oldclass,newclass,mobile){

var oldclass = oldclass;


var newclass = newclass;

if(mobile == 1){

 document.getElementById(id).className = newclass;

}else{

document.getElementById(id).className = oldclass;


}

}

function changewidthmobile(id,mobile){

var div =  document.getElementById(id);

if(mobile ==  0){

div.style.width = "50%";

}

}

