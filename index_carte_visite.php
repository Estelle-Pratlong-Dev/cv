<?php
require 'verifForm.php';
require 'add-view.php';
require 'inc/show-views.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <meta name="google-site-verification" content="_ONUwbKNVoMyB6_G3HCjOy-KReBmtbVrvsdyxnd24xU" /> -->

    <title>CV PRATLONG Estelle Développeuse Web Nîmes</title>
    <meta name="description" content="CV d'Estelle Pratlong, titulaire du titre professionnel de développeur web et web mobile. Langages connu :HTML, CSS, JS, SQL, PHP, Symfony.">

    <link rel="icon" type="image/png" href="img/cv-fav.jpg" />
    <!-- Favicon -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap -->

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Police -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Icônes -->

    <!-- Mon fichier CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

    <nav>
        <a href="#home" id="home_button" title="Accueil"><i class="fas fa-home" aria-label="texte de l'infobulle"></i></a>
        <a href="#about" id="about_button" title="Á propos"><i class="fas fa-user-tie"></i></a>
        <a href="#resume" id="resume_button" title="CV"><i class="fas fa-address-book"></i></a>
        <a href="#portfolio" id="portfolio_button" title="Portfolio"><i class="fas fa-briefcase"></i></a>
        <a href="#contact" id="contact_button" title="Contact"><i class="fas fa-envelope"></i></a>
        <a href="#add-view" id="add-view_button" title="Donner un avis"><i class="fas fa-edit"></i></a>
    </nav>

    <!-------------------------------------- ACCUEIL -------------------------------------->
    <header>
		<div style='height:80px;'></div>
        <h1 style='font-size:110px; margin-left:-50px'>Estelle PRATLONG</h1>
        <div style='font-size:90px; margin-left:-50px'>Développeuse Web</div>
        <div style='height:50px;'></div>
        <div style='font-size:40px; font-weight:normal; margin-left:-50px'><img  style="width:90px; padding-right:5px;" src="https://img.icons8.com/windows/128/ffffff/phone.png"/> 06.11.53.67.08</div>
        <div style='font-size:40px; font-weight:normal; margin-left:-50px'><img  style="width:90px; padding-right:5px;" src="https://img.icons8.com/material-outlined/128/ffffff/important-mail.png"/> pratlong.estelle@gmail.com</div>
        <div style='font-size:40px; font-weight:normal; margin-left:-50px'><img  style="width:90px; padding-right:5px;" src="https://img.icons8.com/metro/104/ffffff/domain.png"/> http://pratlong-estelle-site.fr</div>
    </header>

    <main>

        <!------------------------------------ A PROPOS ------------------------------------>
        <section id="about">

            <div class="header-page">
                <h2>Á propos de moi</h2>
                <span class="title"></span>
            </div>

            <article class="container">
                <div class="row">
                    <!-- <figure class="col-md-4">
                        <img src="img/profile.jpg" alt="Photo">
                    </figure> -->
                    <!-- <div class="col-md-8 me"> -->
                    <div class="col-md-10 me">
                        <h4>Estelle Pratlong</h4>
                        <p><i class="fas fa-map-marked-alt"></i> Beaucaire (30) <br><br>
                            Autodidacte et passionnée par l'informatique depuis toujours, j'ai choisi une formation de développeur web afin d'approfondir et d'enrichir mes connaissances.<br>
                            Aujourd'hui titulaire du titre professionnel Développeur Web et Web Mobile, je cherche constamment à acquérir et m'enrichir de nouvelles expériences. </p>
                    </div>
                </div>
                <div class="dl-cv">
                    <a href="img/pratlong-estelle-cv.pdf" target="blank"> Télécharger mon CV</a>
                </div>
            </article>

            <div class="subtitle">
                <h3>Centres d'interets</h3>
            </div>
            <article class="container">
                <div class="row interest">
                    <div class="col-md-4">
                        <p> <i class="fas fa-laptop-code"></i> Informatique </p>
                    </div>
                    <div class="col-md-4">
                        <p> <i class="fas fa-horse"></i> Équitation </p>
                    </div>
                    <div class="col-md-4">
                        <p> <i class="fas fa-motorcycle"></i> Moto </p>
                    </div>
                    <div class="col-md-4">
                        <p> <i class="fas fa-cookie-bite"></i> Pâtisserie </p>
                    </div>
                    <div class="col-md-4">
                        <p> <i class="fas fa-music"></i> Musique </p>
                    </div>
                    <!--<div class="col-md-4">
                        <p> <i class="fas fa-gamepad"></i> Jeux video </p>
                    </div>-->
                    <div class="col-md-4">
                        <p> <i class="fas fa-film"></i> Films, séries </p>
                    </div>
                    <div class="col-md-4">
                    </div>
            </article>

            <div class="subtitle">
                <h3>Avis</h3>
            </div>
            <article class="container">
                <div class="row all-view">
                    <?php foreach ($views as $views) : ?>
                        <div class="col-md-4">
                            <div class="view">
                                <h4><?= $views['name']; ?></h4>
                                <h5><i class="fas fa-briefcase"></i><?= $views['function']; ?></h5>
                                <p><?= $views['message']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </article>

        </section>

        <!-------------------------------------- CV --------------------------------------->
        <section id="resume">

            <div class="header-page">
                <h2>CV</h2>
                <span class="title"></span>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="subtitle">
                            <h3>Expériences</h3>
                        </div>
                        <article class="experience">
                            <div class="item">
                                <div class="main">
                                    <h4>Developpeuse Web</h4>
                                    <p><i class="fas fa-industry"></i> TEAMBER (31)<br>
                                        <i class="fas fa-calendar-alt"></i> 01/2020 à ce jour</p>
                                </div>
                                <p>Développement, intégration web et support client.</p>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Stage de développeur web</h4>
                                    <p><i class="fas fa-industry"></i> CREA2F (31)<br>
                                        <i class="fas fa-calendar-alt"></i> 09/2019 - 10/2019</p>
                                </div>
                                <p>Résolution de bug, ajout et modification de contenu, sourcing, retouche images, rédaction de documentation et surtout création de site web sur Wordpress.</p>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Préparatrice / contrôleuse de commandes</h4>
                                    <p><i class="fas fa-industry"></i> Innoset, Roldan (31) / Katoen Natie, Office dépôt, Distrimag (13)<br>
                                        <i class="fas fa-calendar-alt"></i> 2011 - 2018</p>
                                </div>
                                <p>Conduite de chariot élévateur, chargement de camions, préparation et contrôle de commandes, montage et filmage de palettes, manipulation de logiciels entreprise...</p>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Accompagnatrice de tourisme équestre</h4>
                                    <p><i class="fas fa-industry"></i> Abrivado ranch (30)<br>
                                        <i class="fas fa-calendar-alt"></i> Été 2011</p>
                                </div>
                                <p>Soins des chevaux, accueil clients, accompagnement et animation des promenades...</p>
                            </div>
                        </article>
                    </div>

                    <div class="col offset-md-1">
                        <div class="subtitle">
                            <h3>Formation</h3>
                        </div>
                        <article class="education">
                            <div class="item">
                                <div class="main">
                                    <h4>Titre professionnel Développeur web et web mobile</h4>
                                    <p><i class="fas fa-school"></i> Web Force 3 Toulouse<br>
                                        <i class="fas fa-calendar-alt"></i> 05/2019 - 10/2019</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Certifications OpenClassrooms</h4>
                                    <p><i class="fas fa-school"></i> OpenClassrooms<br>
                                        <i class="fas fa-calendar-alt"></i> 2019 </p>
                                </div>
                                <ul>
                                    <li>Créer votre site web avec HTML5 et CSS3</li>
                                    <li>Prenez en main Bootstrap</li>
                                    <li>Découvrez le fonctionnement des algorythmes</li>
                                    <li>Introduction à jQuery</li>
                                    <li>Concevez votre site web avec PHP et MySQL </li>
                                    <li>Adoptez une architecture MVC en PHP</li>
                                </ul>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Baccalauréat Technologique Comptabilité et finances des entreprises</h4>
                                    <p><i class="fas fa-school"></i> Lycée Alphonse Daudet (Tarascon - 13)<br>
                                        <i class="fas fa-calendar-alt"></i> 09/2007 - 07/2010</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Diplôme équestre - Galop 5</h4>
                                    <p><i class="fas fa-school"></i> CE de Lansac (13)<br>
                                        <i class="fas fa-calendar-alt"></i> 2011<p>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>

            <div class="subtitle">
                <h3>Qualités</h3>
            </div>
            <article class="container">
                <div class="row quality">
                    <div class="col-md-3">
                        <p> <span></span> Curiosité </p>
                    </div>
                    <div class="col-md-3">
                        <p> Soif d'apprentissage </p>
                    </div>
                    <div class="col-md-3">
                        <p> Esprit d’analyse / sens logique </p>
                    </div>
                    <div class="col-md-3">
                        <p> Travail en équipe </p>
                    </div>
                    <div class="col-md-3">
                        <p> Capacités d’adaptation </p>
                    </div>
                    <div class="col-md-3">
                        <p> Polyvalence </p>
                    </div>
                    <div class="col-md-3">
                        <p> Réactivité </p>
                    </div>
                    <div class="col-md-3">
                        <p> Autonomie </p>
                    </div>
            </article>

            <div class="subtitle">
                <h3>Compétences</h3>
            </div>
            <article class="container skills">
                <div class="row">

                    <div class="col-md-6">
                        <div class="main">
                            <h4><i class="fab fa-html5"></i> HTML5</h4>
                            <p>99%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:99%"></div>
                        </div>
                        <div class="main">
                            <h4><i class="fab fa-css3-alt"></i> CSS3</h4>
                            <p>99%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:99%"></div>
                        </div>
                        <div class="main">
                            <h4><i class="fab fa-js-square"></i> Javascript</h4>
                            <p>90%</p>
                        </div>
						<div class="progress">
                            <div class="progress-bar" style="width:90%"></div>
                        </div>
                        <div class="main responsive">
                            <h4><img src="img/phone-laptop.png" alt=""> Responsive Design</h4>
                            <p>90%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:90%"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="main">
                            <h4><i class="fas fa-database"></i> SQL</h4>
                            <p>85%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:85%"></div>
                        </div>
                        <div class="main">
                            <h4><i class="fab fa-php"></i> PHP</h4>
                            <p>90%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:90%"></div>
                        </div>
                        <div class="main">
                            <h4><i class="fab fa-symfony"></i> Symfony</h4>
                            <p>70%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:70%"></div>
                        </div>
                        <div class="main">
                            <h4><i class="fab fa-drupal"></i> Drupal</h4>
                            <p>80%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:80%"></div>
                        </div>

                    </div>
                </div>
            </article>
        </section>

        <!------------------------------------ PORTFOLIO ------------------------------------>

        <section id="portfolio">
            <div class="header-page">
                <h2>Portfolio</h2>
                <span class="title"></span>
            </div>
            <div class="container">
                <div class="row">
                    <figure class="col-md-3">
						<a href="https://my-meteo.pratlong-estelle-site.fr/" target="_blank">
							<img src="img/projects/my_meteo-logo.png" alt="Logo My Météo">
							<figcaption>
								<h4>My météo</h4>
								<p>Adaptation web d'un application météo crée avec Cordova</p>
							</figcaption>
						</a>
                    </figure>
					<figure class="col-md-3">
						<a href="https://south-west-store.pratlong-estelle-site.fr/" target="_blank">
							<img src="img/projects/south_west_store-logo.png" alt="Logo South West Store">
							<figcaption>
								<h4>South-West-Store</h4>
								<p>Site e-commerce de sneakers de collection</p>
							</figcaption>
							</a>
					</figure>
                    <figure class="col-md-3 vic">
                        <img src="img/projects/vic_capital-logo.png" alt="Logo Vic Capital">
                        <figcaption>
                            <h4>Vic Capital</h4>
                            <p>Site vitrine d'une entreprise de consultant patrimonial </p>
                        </figcaption>
                    </figure>
                    <figure class="col-md-3">
						<a href="http://CV-web.pratlong-estelle-site.fr" target="_blank">
							<img src="img/cv-fav.jpg" alt="Logo CV">
							<figcaption>
								<h4>CV web</h4>
								<p>Mon premier CV</p>
							</figcaption>
						</a>
                    </figure>
                    <figure class="col-md-3">
                        <img src="img/projects/fairgrounds-logo.png" alt="Logo Fairgrounds">
                        <figcaption>
                            <h4>Fairgrounds Animations</h4>
                            <p>Site vitrine d'une entreprise de location d'attractions <br>(Bientôt disponible...) </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <!------------------------------------- CONTACT -------------------------------------->

        <section id="contact">
            <div class="header-page">
                <h2>Contact</h2>
                <span class="title"></span>
            </div>

            <article class="container">
                <form method="post">

                    <div id="msg"></div>

                    <div class="row">
                        <input type="text" id="name" name="contact_name" class="col" placeholder="Nom" required>

                        <input type="email" id="email" name="contact_email" class="col offset-1" placeholder="Email" required>
                    </div>

                    <div class="row">
                        <textarea name="contact_message" id="message" cols="10" rows="5" class="col" placeholder="Votre message" required></textarea>
                    </div>
                    <input type="hidden" name="action" value="contact-form">
                    <input type="submit" value="Envoyer">
                </form>
            </article>

            <article class="container links">
                <div>
                    <a href="tel:0611536708"><i class="fas fa-mobile-alt"></i></a>
                    <p>Téléphone</p>
                </div>
                <div>
                    <a href="mailto:pratlong.estelle@gmail.com"><i class="fas fa-envelope"></i></a>
                    <p>Email</p>
                </div>
                <div>
                    <a href="https://www.linkedin.com/in/estelle-pratlong-dev5871184" target="blank"> <i class="fab fa-linkedin"></i></a>
                    <p>LinkedIn</p>
                </div>
                <div>
                    <a href="https://github.com/Estelle-Pratlong-Dev?tab=repositories" target="blank"> <i class="fab fa-github"></i></a>
                    <p>GitHub</p>
                </div>
            </article>
        </section>

        <!--------------------------------- AJOUTER UN AVIS ---------------------------------->
        <section id="add-view">
            <div class="header-page">
                <h2>Donnez votre avis</h2>
                <span class="title"></span>
            </div>

            <article class="container">
                <form method="post">

                    <div id="msg-view"></div>

                    <div class="row">
                        <input type="text" id="name" name="view_name" class="col" placeholder="Nom" required>

                        <input type="text" id="function" name="view_function" class="col offset-1" placeholder="Métier" required>
                    </div>

                    <div class="row">
                        <textarea name="view_message" id="message" cols="10" rows="5" class="col" placeholder="Votre message" required></textarea>
                    </div>

                    <input type="hidden" name="action" value="view-form">
                    <input type="submit" value="Envoyer">
                </form>
            </article>

        </section>
    </main>



    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- script alert "Mail send"-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- Mon script -->
    <script src="js/script.js"></script>
</body>

</html>