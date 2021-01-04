<?php
session_start();
	include_once '../inc/connect.php';

$req = $bdd->prepare('SELECT * FROM user WHERE (nom = :nom OR mail = :nom) AND mdp=:mdp');
$req->execute(array(
    'nom' => $_POST["nom"],
    'mdp' => $_POST["mdp"]
));
$a = $req->fetch();
$req->closeCursor();

if($a){
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['id'] = $a['id'];
    header('Location: ../config/config.php');
}
else{
    header('Location: ../login.html');
}
?>
