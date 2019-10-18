<?php 


include("head.php");

include("header.php");




function quota($val,$pseudo,$mysqli){

$pseudo = $mysqli->real_escape_string($pseudo);

$value = $mysqli->real_escape_string($val)."GB";

$quota = "UPDATE oc_preferences set configvalue = '$value'  WHERE userid= '$pseudo' && appid = 'files' && configkey = 'quota'";

$mysqli->query($quota);

}



?>
