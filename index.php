<?php
include_once 'inc/connect.php';
$req = $bdd->query('SELECT * FROM user WHERE id = 1 AND mdp = "admin"');
$donnee = $req->fetch();
if(!empty(($donnee))){
  header('Location: ./login.html');
}
else {
	$req = $bdd->query('SELECT * FROM config');
	$a = $req->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PortFolio BTS SIO SLAM | <?php echo $a["prenom"].' '.$a["nom"]; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><?php echo $a["prenom"].' '.$a["nom"]; ?></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Veille technologique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(assets/img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4"><?php echo $a["prenom"].' '.$a["nom"]; ?></h1>
          <p class="intro-subtitle"><span class="text-slider-items">Etudiante en BTS SIO (Services Informatiques aux Organisations),option SLAM (Solutions Logicielles et Applications Métiers).</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nom: </span> <span><?php echo $a["prenom"].' '.$a["nom"]; ?></span></p>
                        <p><span class="title-s">Status: </span> <span>Etudiante en BTS SIO option SLAM</span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $a["mail"]; ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Compétences</p>
                    <span>HTML</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVA</span> <span class="pull-right">15%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        A propos
                      </h5>
                    </div>
                    <p class="lead">
                      Diplômé d'un Baccalauréat SN (Système Numérique), je suis depuis septembre au lycée privée
                      Robert Schuman à Dugny, ou je réalise un BTS SIO(Services Informatiques aux Organisations) option SLAM (Solutions
                      Logicielles et Applications Métier) Dans la perspective d'obtenir un Master en Sécurité Informatique (Bac +5).
                    </p>
                      <div>
                          <a target="_blank" href="assets/docs/CV- Benjamin Francisco.pdf">
                            <button type="button" class="btn btn-primary btn-CV">Obtenir mon CV !</button>
                          </a>
                      </div>
                  </div>
                </div>-
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Compétences
              </h3>
              <p class="subtitle-a">
                Toutes ces connaissances ont été acquises de différentes façons.<br>
                Elles ont été acquises durant mes études et d'autres par ma propre initiative en essayant de mettre en place des solutions.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Développement Web</h2>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Conception graphique</h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Gestion d'Equipe</h2>
              </div>
            </div>
          </div>
        </div>
          <div class="d-flex justify-content-center mb-5">
              <a target="_blank" href="assets/docs/Portefeuille competences- Benjamin Francisco.pdf">
                  <button type="button" class="btn btn-primary btn-CV">Tableau de compétences !</button>
              </a>
          </div>
      </div>
    </section><!-- End Services Section -->

      <section id="situations" class="blog-mf sect-pt4 route">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="title-box text-center">
                          <h3 class="title-a">
                              Situations Professionnelles
                          </h3>
                          <p class="subtitle-a">
                              Les situations professionnelles que j'ai vécues jusqu'à présent.
                          </p>
                          <div class="line-mf"></div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="card card-blog">
                          <div class="card-body">
                              <h3 class="card-title">Stagiaire Support Informatique</h3>
                              <p class="card-description">
                                  <b>Missions :</b> Téléphonie sur IP (VOIP), Masterisation De
                                  Poste (Migration d'ancien Poste Windows 7 en Windows
                                  10), Support Informatique (Suivi des utilisateurs via le
                                  gestionnaire de Ticket GLPI ).
                              </p>
                          </div>
                          <div class="card-footer">
                              <div class="post-date">
                                  <span class="ion-ios-clock-outline"></span> Préfecture de Bobigny – Janvier - Février 2019
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="card card-blog">
                          <div class="card-body">
                              <h3 class="card-title">Stagiaire Support Informatique</h3>
                              <p class="card-description">
                                  <b>Missions :</b> Masterisation De Poste (Migration d'ancien
                                  Poste Windows 7 en Windows 10, Réalisation de Script en
                                  commande DOS, Montage PC, Support Informatique (Suivi
                                  des utilisateurs via le gestionnaire de Ticket GLPI )
                              </p>
                          </div>
                          <div class="card-footer">
                              <div class="post-date">
                                  <span class="ion-ios-clock-outline"></span> Préfecture de Bobigny – Mai-Juin 2018
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-6 col-lg-6">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php echo $a["nb_projets"]; ?></p>
                <span class="counter-text">PROJETS TERMINÉS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">1</p>
                <span class="counter-text">ANNÉE D'EXPÉRIENCE</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                PROJETS
              </h3>
              <p class="subtitle-a">
                Vous pouvez retrouver les différents projets que j'ai pu mener personnellement et durant mes études.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="./assets/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="./assets/img/work-3.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bientôt en ligne</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Bientôt</span> / <span class="w-date">...</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="#"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="work-box">
              <a href="./assets/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="./assets/img/work-3.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bientôt en ligne</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Bientôt</span> / <span class="w-date">...</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="#"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="./assets/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="./assets/img/work-3.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bientôt en ligne</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Bientôt</span> / <span class="w-date">...</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="#"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Veille technologique
              </h3>
              <p class="subtitle-a">
                Pour la veille technologique, j'ai décidé de traiter le sujet de la Cybersécurité.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="./assets/docs/Veille-Francisco.jpg" target="_blank"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Cybersécurité</h6>
                  </div>
                </div>
                <h3 class="card-title">Cybersécurité : 16/10/2020</h3>
                <p class="card-description">
                  En pièce jointe vous retrouverez mon dossier de veille technologique sur la Cybersécurité
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="./assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author"><?php echo $a["prenom"].' '.$a["nom"]; ?></span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 16/10/2020
                </div>
              </div>
            </div>
          </div>
            <div class="col-md-4">
                <div class="card card-blog">
                    <div class="card-img">
                        <a href="./assets/docs/Veille-Francisco.jpg" target="_blank"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                                <h6 class="category">Cybersécurité</h6>
                            </div>
                        </div>
                        <h3 class="card-title">Cybersécurité : 22/01/2020</h3>
                        <p class="card-description">
                            En pièce jointe vous retrouverez mon dossier de veille technologique sur la Cybersécurité
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="post-author">
                            <a href="#">
                                <img src="./assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                <span class="author"><?php echo $a["prenom"].' '.$a["nom"]; ?></span>
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="ion-ios-clock-outline"></span> 22/01/2020
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Contact !
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="nom" class="form-control" id="name" placeholder="Entrez votre Nom" data-rule="minlen:4" data-msg="Veuillez saisir au moins 4 caractères" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="mail" id="email" placeholder="Entrez votre Email" data-rule="email" data-msg="Veuillez saisir un e-mail valide" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="objet" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Veuillez saisir au moins 8 caractères de sujet" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-4">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <!--<div class="col-md-12 text-center mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div> -->
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Envoyer</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Information
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Le meilleur moyen de me contacter est de passer par mon addresse mail grâce à ce formulaire de contact vous pourez aisément me contacter n'oublier pas de renseigner vos informations afin que je vous transmette une réponse sous peu.
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-email"></span><?php echo $a["mail"]; ?></li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="<?php echo $a["link_linkedin"]; ?>" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright 2020 - Par la <strong>DevCommunityClub</strong>.</p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
