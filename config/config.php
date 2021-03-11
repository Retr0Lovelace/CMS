<?php
session_start();
include_once '../inc/connect.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>PortFolio login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
  </head>
  <body>
    <section class="top">
      <h1 class="h3 mb-3 fw-normal">Bonjour <?php echo $_SESSION['nom']; ?>,</h1>
      <p style="font-size: 18px;">Nous avons besoin que vous nous indiquez quelques informations ...</p>
    </section>
    <section class="body">
      <main class="form-signin">
        <form action="../ct/config_ct.php" method="post">
          <h1 class="h3 mb-3 fw-normal text-center">Rentrez vos informations</h1>

          <label for="mdp">Nouveau mot de passe Admin</label>
          <input type="password" name="mdp" id="mdp" class="form-control mb-3" placeholder="mot de passe" required autofocus>

          <label for="Nom">Entrez votre Nom</label>
          <input type="text" name="nom" id="Nom" class="form-control" placeholder="Nom" required >
          <label for="prenom">Entrez votre Prenom</label>
          <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prenom" required >

          <label for="mail">Entrez votre Mail</br><span class="text-muted">(Recevez vos messages de la section contact.)</span></label>
          <input type="text" name="mail" id="mail" class="form-control mb-3" placeholder="Email" required >

          <label for="nb_projets" style="font-size: 15px;">Entrez le nombre de projets que vous avez réalisez :</label>
          <input type="number" name="nb_projets" id="nb_projets" class="form-control mb-3" placeholder="Ex.: 3" required >

          <label for="link_github">Lien de votre github <span class="text-muted">(facultatif)</span> :</label>
          <input type="url" name="link_github" id="link_github" class="form-control mb-3" placeholder="Lien de votre github">

          <label for="link_linkedin">Lien de votre Linkedin :</label>
          <input type="url" name="link_linkedin" id="link_linkedin" class="form-control mb-3" placeholder="Lien de votre Linkedin" required>

          <button class="w-100 btn btn-lg btn-secondary" type="submit">Entrez</button>
          <p class="mt-5 mb-3 text-muted">Copyright © 2020 - Par la DevCommunityClub</p>
        </form>
      </main>
    </section>
  </body>
</html>
