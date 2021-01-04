<?php
include_once 'inc/connect.php';
$req = $bdd->query('SELECT * FROM user WHERE id = 1 AND mdp = "admin"');
$donnee = $req->fetch();
if(!empty(($donnee))){header('Location: ./login.html');
}
else {
	$req = $bdd->query('SELECT * FROM config');
	$a = $req->fetch();
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
		PortFolio BTS SIO SLAM |
		<?php echo $a["prenom"].' '.$a["nom"]; ?>
	</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-transparents fixed-top" id="mainNav">
		<div class="container-fluid">
			<a class="navbar-brand mx-auto" onclick="topFunction()" href="#mainNav"><img src="./assets/img/lprs.png" alt="Logo Lycée Robert Schuman"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto nav_ul">
					<li class="nav-item mx-auto pt-2 nav_li"><a class="nav-link " href="#About">A propos</a></li>
					<li class="nav-item mx-auto pt-2 nav_li"><a class="nav-link " href="#Scroll_Skills">Compétences</a></li>
					<li class="nav-item mx-auto pt-2 nav_li"><a class="nav-link " href="#Scroll_Projets">Projets</a></li>
					<li class="nav-item mx-auto pt-2 nav_li"><a class="nav-link " href="#Veille">Veille technologique</a></li>
					<li class="nav-item mx-auto nav_li">
						<a class="nav-link " href="#Scroll_Contact" tabindex="-1" aria-disabled="true"><button class="btn btn_contact btn-block btn-primary">Contact</button></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<a id="button" onclick="topFunction()"><i class="fas fa-2x fa-angle-double-up"></i></a>
	<section class="header">
		<div class="headers">
			<div class="Presentation">
				<h1>
					Mr.
					<?php echo $a["prenom"].' '.$a["nom"]; ?>
				</h1>
				<p>
					Etudiant en BTS SIO (Services Informatiques aux Organisations)
					</br>
					option SLAM(Solutions Logicielles et Applications Métiers).
				</p>
				<div class="button">
					<a class="text-white" href="./assets/docs/CV- Benjamin Francisco.pdf" target="_blank"><button class="btn_ btn-CV" type="button">Télécharger mon CV</button></a>
					<a class="text-white" href="#Scroll_Projets"><button class="btn_ btn-Projets" type="button">Mes Projets</button></a>
				</div>
			</div>
			<div class="img">
				<img src="./assets/img/Groupe 34863.png" class="float-end photo mt-3" alt="Photo de Profil">
			</div>
			<div class="scrolldown_">
				<a class=" text-white" href="#About"><img src="./assets/img/Mouse.png" class="scroll_down" alt="scrolldown"></a>
			</div>
		</div>
	</section>
	<hr class="Hr">
	<section id="About">
		<div class="col-xs-12 Header_About text-center text-white">
			<h2>A propos</h2>
			<p>
				Diplômé d'un Baccalauréat Professionnel S.N (Système Numérique), je suit depuis septembre au lycée privée
				<br>
				Robert Schuman à Dugny, un BTS SIO(Services Informatiques aux Organisations) option SLAM (Solutions
				<br>
				Logicielles et Applications Métier) dans la perspective d'obtenir un Master en Sécurité Informatique (Bac +5).
			</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4 class="text-center About_h4_top">BTS SIO option SISR</h4>
				<h4 class="text-center About_h4_bot">Solutions d’infrastructure, systèmes et réseaux!</h4>
				<div class="About_texte">
					<p class="text-white">
						L’option Solution d’infrastructure, systèmes et réseaux forme
						<br>
						des professionnels des réseaux et équipements
						<br>
						informatiques (installation, maintenance, sécurité). En sortant
						<br>
						d’un BTS SIO SISR, vous serez capables de gérer et
						<br>
						d’administrer le réseau d’une société et d’assurer sa sécurité
						<br>
						et sa maintenance.
						<br>
						Les techniciens supérieurs en informatique option SISR,
						<br>
						peuvent accéder aux métiers de :
						<br>
					</p>
					<ul class="text-white">
						<li><p>Administrateur systèmes et réseaux</p></li>
						<li><p>Informaticien support et déploiement</p></li>
						<li><p>Pilote d’exploitation</p></li>
						<li><p>Support systèmes et réseaux</p></li>
						<li><p>Technicien d’infrastructure</p></li>
						<li><p>Technicien de production</p></li>
						<li><p>Technicien micro et réseaux</p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<h4 class="text-center About_h4_top">BTS SIO option SLAM</h4>
				<h4 class="text-center About_h4_bot">Solutions Logicielles et Applications Métiers!</h4>
				<div class="About_texte">
					<p class="text-white">
						L’option Solutions logicielles et applications métiers forme
						<br>
						des spécialistes des logiciels (rédaction d’un cahier des charges,
						<br>
						formulation des besoins et spécifications, développement,
						<br>
						intégration au sein de la société).
						<br>
						Les techniciens supérieurs en informatique option slam, sont
						<br>
						préparés aux métiers de :
						<br>
					</p>
					</br>
					<ul class="text-white">
						<li><p>Développeur d’applications informatiques</p></li>
						<li><p>Développeur informatique</p></li>
						<li><p>Analyste d’applications ou d’études</p></li>
						<li><p>Analyste programmeur</p></li>
						<li><p>Programmeur analyste</p></li>
						<li><p>Programmeur d’applications</p></li>
						<li><p>Responsable des services applicatifs</p></li>
						<li><p>Technicien d’études informatiques</p></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<hr class="Hr" id="Scroll_Skills">
	<section class="Skills" id="Skills">
		<div class="col-12 Header_About text-center text-white">
			<h2>Compétences</h2>
			<p>
				Toutes ces connaissances ont été acquises de différentes façons. Elles ont été acquises durant mes études et d'autres
				<br>
				par ma propre initiative en essayant de mettre en place des solutions.
			</p>
		</div>
		<div class="row skills_box">
			<a href="https://www.mysql.com/fr/" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<i class="fas fa-4x fa-database skills_logos"></i>
					</div>
					<p>
						SQL
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
			<a href="https://developer.mozilla.org/fr/docs/Web/Guide/HTML/HTML5" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<i class="fab fa-4x fa-html5 skills_logos"></i>
					</div>
					<p>
						HTML/CSS
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
			<a href="https://www.php.net/manual/fr/intro-whatis.php" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<img class="skills_logos" src="https://img.icons8.com/ios/50/000000/php-server.png"/>
					</div>
					<p>
						PHP
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
		</div>
		<div class="row skills_box">
			<a href="https://www.java.com/fr/" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<i class="fab fa-4x fa-java skills_logos"></i>
					</div>
					<p>
						JAVA
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
			<a href="https://www.python.org/" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<i class="fab fa-4x fa-python skills_logos"></i>
					</div>
					<p>
						Python
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
			<a href="https://docs.microsoft.com/fr-fr/dotnet/csharp/" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<img class="resize skills_logos" src="./assets/img/csharp-1-1175241.png"/>
					</div>
					<p>
						C#
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
		</div>
		<div class="row skills_box">
			<a href="https://fr.wikibooks.org/wiki/Les_r%C3%A9seaux_informatiques/Les_mod%C3%A8les_OSI_et_TCP" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<i class="fas fa-3x fa-terminal skills_logos"></i>
					</div>
					<p>
						Adressage IP
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
			<a href="https://fr.wikipedia.org/wiki/Virtualisation" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<i class="fas fa-3x fa-server skills_logos"></i>
					</div>
					<p>
						Virtualisation
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
			<a href="https://www.microsoft.com/fr-fr/microsoft-365/microsoft-office" target="_blank">
				<div class="box col-lg-4 col-md-6">
					<div class="skills_logo">
						<i class="fas fa-3x fa-mail-bulk skills_logos"></i>
					</div>
					<p>
						Bureautique
					</p>
					<i class="fas fa-2x fa-arrow-right"></i>
				</div>
			</a>
		</div>
		<div class="col-12">
			<a class="text-white center" href="./assets/docs/e6_tableau_de_compétences.pdf" target="_blank"><button class="btn_ btn-TC" type="button">Tableau de Compétences</button></a>
		</div>
	</section>
	<section class="Projets" id="Scroll_Projets">
		<div class="screen_project">
			<p>
				<span><?php echo $a["nb_projets"]; ?></span>
				<br>
				Projets
			</p>
		</div>
		<div class="col-xs-12 Header_Projets text-center text-white">
			<h2>Projets</h2>
			<p>
				Vous pouvez retrouver les différents projets que j'ai pu mener personnellement  et durant  mes études.
			</p>
		</div>
		<div class="container">
			<div class="col-md-2">
				<div class="">
					<a class="btn_ btn-githubs" href="<?php echo $a["link_github"]; ?>" target="_blank">
						<button type="button" class="btn-github" name="button">
							<i class="fab fa-2x  fa-github"></i>
							<span>Github</span>
						</button>
					</a>
				</div>
			</div>
			<div class="col-md-10 d-flex cards">
				<div class="card card-1" style="width: 18rem;">
					<img src="./assets/img/Capture.JPG" class="card-img-top " alt="...">
					<div class="card-body">
						<a href="https://wedoschool.000webhostapp.com/" target="_blank" class="btn btn-primary">Projet<br>WeDoSchool</a>
					</div>
				</div>
				<div class="card card-2" style="width: 18rem;">
					<img src="./assets/img/Capture2.JPG" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="https://devcomclub.ml/" target="_blank" class="btn btn-primary">Projet<br>DevCommunityClub</a>
					</div>
				</div>
				<div class="card card-3" style="width: 18rem;">
					<img src="./assets/img/Capture3.JPG" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="#" class="btn btn-primary">Projet<br>Bientôt diponible</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="Veille">
		<div class="col-12 mpt-3 Header_About text-center text-white">
			<h2>Veille technologique</h2>
			<p>
				Pour la veille technologique, j'ai décidé de traiter le sujet de la Cybersécurité.
			</p>
		</div>
		<h2 class="text-white ms-5 mb-3">Dossier :</h2>
		<div class="col-md-12 Veille_cards">
			<div class="card" style="width: 18rem;">
				<img src="./assets/img/cybersecurité.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">
						Veille : 16/10/2020
					</h5>
					<a href="./assets/docs/Veille-Francisco.jpg" target="_blank" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
	</section>
	<hr class="Hr" id="Scroll_Contact">
	<section id="Contact">
		<h2 class="Header_Contact text-white">Contact !</h2>
		<div class="">
			<div class="socials">
				<a href="mailto:<?php echo $a["mail"]; ?>" target="_blank">
					<div class="contact_logo">
						<i class="fas fa-3x fa-envelope contact_logos"></i>
					</div>
					<p class="contact_text">
						<span>Email</span>
						</br>
						b.francisco@lprs.fr
					</p>
				</a>
				<div class="Find_me">
					<h3>Retrouvez-moi sur !</h3>
					<div class="social">
						<a href="https://www.instagram.com/devcomclub/" target="_blank"><i class="fab fa-3x fa-instagram"></i></a>
						<a href="" target="_blank" class="pe-5"><i class="fab fa-3x fa-linkedin-in"></i></a>
					</div>
				</div>
				<form action="mail.php" method="post">
					<div class="form-group-1">
						<input type="text" class="me-3" id="name" name="nom" placeholder="Name">
						<input type="email" id="mail" name="mail" placeholder="Email">
					</div>
					<div class="form-group-2">
						<textarea class="msg mt-3" name="Message" rows="8" cols="80" placeholder="Message"></textarea>
					</div>
					<div class="form-group-3">
						<input type="submit" class="mt-4" placeholder="Envoyer">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section id="Footer">
	<p class="text-center">
		Copyright © 2020 - Par la DevCommunityClub
	</p>
</section>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
