<?php
include_once '../inc/connect.php';

$req = $bdd->prepare('UPDATE config SET nom=:nom,prenom=:prenom,mail=:mail,nb_projets=:nb_projets,link_github=:link_github,link_linkedin=:link_linkedin WHERE id = 1');
$req->execute(array(
    'nom' => $_POST["nom"],
    'prenom' => $_POST["prenom"],
    'mail' => $_POST['mail'],
    'nb_projets' => $_POST['nb_projets'],
    'link_github' => $_POST['link_github'],
    'link_linkedin' => $_POST['link_linkedin']
));

$req1 = $bdd->prepare('UPDATE user SET mdp = :mdp, mail = :mail WHERE id = 1');
$req1->execute(array(
    'mail' => $_POST['mail'],
    'mdp' => $_POST['mdp']
));
header('Location: ../index.php');

?>
