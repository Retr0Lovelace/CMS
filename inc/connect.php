<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=cms;charset=utf8','root','');
}
catch(Exeption $e){
    die('Erreur :'.$e->getMessage());
}
?>
