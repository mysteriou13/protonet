
class boutonpaypal{


  constructor(){
  var url = "./paypal.php"; 

  var type = this.GET('type');

  var  nb  = this.GET('nb');


if(type != null){

document.getElementById(this.GET('type')).checked =true; 

}

if(type != null && nb != null){

 document.getElementById("paypal").style.display = "block"; 

}else{

 document.getElementById("paypal").style.display = "none"; 

}

if( nb != null){

document.getElementById('nb').value = nb;

}


}

 
 dis(){
 this.url = "paypal.php";
 var radios = document.getElementsByName('perso');
  var nb = document.getElementById("nb");
  var type = null;

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


if(type != null && nb.value == ""){

type = "?type="+type;

this.url  = this.url+type;

}

if(nb.value != "" && type == null){

this.url = this.url+"?nb="+nb.value;

}

if(nb.value != "" && type != null){


this.url = this.url+"?type="+type+"&nb="+nb.value;

}



window.location.replace(this.url);


}

   GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}


}

