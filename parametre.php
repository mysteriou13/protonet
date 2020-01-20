<html>
<body>

<?php 

include_once("head.php");

include_once("header.php");

$email = $_SERVER['PHP_SELF']."?email=1";

$e = new email();

if(empty($_SESSION['pseudo'])){

header("Location:index.php");

}


$select = "SELECT * FROM membre WHERE pseudo = '$pseudo'";

$select1 = $mysqli->query($select);

$select2 = $select1->fetch_assoc();


$next = "SELECT COUNT(*)pseudo FROM nextcloud WHERE pseudo = '$pseudo'";

$next1 = $mysqli->query($next);

$next2 = $next1->fetch_assoc();

$cloud = "SELECT * FROM nextcloud WHERE pseudo = '$pseudo'";

$cloud1 = $mysqli->query($cloud); 

$cloud2 = $cloud1-> fetch_assoc();



?>

<div id ="listebutton"> <div  
onclick = "par.affiche('buttonparametre','parametre',listebutton,listediv)" > <button id="buttonparametre"  class="b4">parametre</button></div> 

<div  onclick = "par.affiche('buttonnextcloud','nextcloud',listebutton,listediv,'comptenextcloud',listesousbutton,'perso',listesousdiv)"><button id ="buttonnextcloud"  class ="b4">  nextcloud</button></div>  </div>

</br>
<div id = "parametre" class ="b3">
<div>

<center>
parametre
</center>

</div>
</br>

  <div >
 

<center>
pseudo : <?php echo $select2['pseudo']?>
</center>

</div>

</br>

<div >
<center>
email : <?php echo $select2['email']?> etat: 
<?php 


$verif =  $select2['verifemail']; 

if($verif == 0){

echo "non verfi&eacute; &nbsp;"."<a href ="."'".$email."'"." style = 'color:white'>verifier email</a>";



if(isset($_GET['email']) && !empty($_GET['email'])){

$length =  rand(10, 50);

$token = bin2hex(random_bytes($length));


$link ="http://vecchionet.com.terraliberta/membre/verifemail.php/?email=$token";

$message = "pour confirmé votre adress mail copier  dans votre navigateur web : :".$link;

$e->envoiemail($select2['email'],"confirmation email",$message,"massanthony@vecchionet.com");



}

}

if($verif == 1){

echo "verfi&eacute;";

}
?>
</center>
</div>
</div>

<div id="nextcloud" class="b3" >

<div id = "boxbutton" >

<div id = "menunextcloud" >
 <button id ="comptenextcloud"  
onclick = "par.affiche('buttonnextcloud','nextcloud',listebutton,listediv,this.id,listesousbutton,'perso',listesousdiv)"> mon compte nextcloud  </button>
</div>

<div id = "comptethier" >
<button id="buttonthier" 
onclick ="par.affiche('buttonnextcloud','nextcloud',listebutton,listediv,this.id,listesousbutton,'thiercloud',listesousdiv) " >compte tiers nextcloud </button>
</div>

</div>

<div id ="perso">

<table>
  <tr>
    <th>pseudo</th>
    <th>email</th> 
    <th>date de fin abonement compte nextcloud</th>
  </tr>
  <tr>
    <td> <center> <?php echo $cloud2['pseudo']; ?> </center> </td>
    <td> <center> <?php echo $cloud2['email']; ?> </center> </td>
    <td> <center> <?php echo $cloud2['date']; ?>  </center></td>
  </tr>

</table>


<?php 

 if($next2['pseudo'] == 0){

 echo "&nbsp;pas encore de compte nextcloud";

 }
?>

 </div>

<div id = "thiercloud">
thiercloud
</div>

 </div>


<script src= "./javascript/parametre.js"> </script>

<script>

var path = window.location.hash;

var path1 = path.split("#");

var listediv = ['parametre','nextcloud'];

var listebutton = ['buttonparametre','buttonnextcloud'];

var listesousbutton = ['comptenextcloud','buttonthier'];

var listesousdiv = ['perso', 'thiercloud'];

var par = new parametre(listebutton,listediv,listesousbutton,listesousdiv);

</script>

</body>
</html>
