<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV PRATLONG Estelle Développeuse web full-stack Gard/Sud Ardèche</title>
    <meta name="description" content="CV d'Estelle PRATLONG, titulaire du 	titre professionnel de développeur web et web mobile. Langages connus : 	HTML, CSS, JS, SQL, PHP, Symfony.">

    <link rel="icon" type="image/png" href="img/cv-fav.jpg" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Ubuntu Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet" />

    <!-- Mon fichier CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
    <nav>
        <a href="#home" id="home_button" data-bs-toggle="tooltip" title="Accueil"><i class="fa-solid fa-house" aria-hidden="true"></i></a>
        <a href="#about" id="about_button" data-bs-toggle="tooltip" title="Á propos"><i class="fas fa-user-tie" aria-hidden="true"></i></a>
        <a href="#resume" id="resume_button" data-bs-toggle="tooltip" title="CV"><i class="fas fa-address-book" aria-hidden="true"></i></a>
        <a href="#portfolio" id="portfolio_button" data-bs-toggle="tooltip" title="Portfolio"><i class="fas fa-briefcase" aria-hidden="true"></i></a>
    </nav>


    <!-------------------------------------- ACCUEIL -------------------------------------->
    <header>
        <h1>Estelle PRATLONG</h1>
        <p class="tagline">Développeuse web full-stack</p>
    </header>

    <main>

        <!------------------------------------ A PROPOS ------------------------------------>
        <section id="about">
            <div class="header-page">
                <h2>À propos de moi</h2>
                <span class="title" aria-hidden="true"></span>
            </div>

            <article class="container">
                <div class="row">
                <div class="col-md-4">
                    <img src="img/Estelle.jpg" alt="Photo d'Estelle PRATLONG">
                </div>
                <div class="col-md-8">
                    <div class="me">
                        <h3>Estelle PRATLONG</h3>
                            <p><i class="fas fa-map-marked-alt" aria-hidden="true"></i> Gagnières (30) <br><br>
                                Développeuse web full-stack, j'évolue depuis 2020 sur des applications métier, principalement autour de PHP, Drupal, JavaScript et des bases de données relationnelles.<br><br>
                                Mon expérience m'a amenée à intervenir sur des domaines variés : développement et maintenance d'applications, intégration web, analyse et migration de données, support technique ou encore coordination de développements avec des équipes externes.<br><br>
                                Curieuse et autodidacte, j'aime comprendre le fonctionnement global d'un projet et ne pas me limiter à une seule couche technique. Je continue à développer mes compétences à travers des projets personnels, notamment en PHP/Symfony et autour de la création de sites web.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4 offset-md-4 text-center dl-cv">
                        <a href="img/pratlong-estelle-cv.pdf" target="_blank" rel="noopener noreferrer">Télécharger mon CV</a>
                    </div>
                </div>
            </article>

            <div class="subtitle">
                <h3>Centres d'intérêts</h3>
            </div>

            <article class="container">
                <div class="row interest">
                    <div class="col-md-4" data-bs-toggle="tooltip" title="Développement, maintenance, ex-gameuse">
                        <p><i class="fas fa-laptop-code" aria-hidden="true"></i> Informatique</p>
                    </div>
                    <div class="col-md-4" data-bs-toggle="tooltip" title="Equitation pendant 10 ans (Galop 5), plusieurs chiens">
                        <p><i class="fa-solid fa-paw" aria-hidden="true"></i> Animaux</p>
                    </div>
                    <div class="col-md-4" data-bs-toggle="tooltip" title="Permis A en 2015, motarde depuis près de 10 ans">
                        <p><i class="fas fa-motorcycle" aria-hidden="true" ></i> Moto</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-cookie-bite" aria-hidden="true"></i> Pâtisserie, Cuisine</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-music" aria-hidden="true"></i> Musique, Livre</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i> Bricolage</p>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i> Jardinage</p>
                    </div>
                    <div class="col-md-4" data-bs-toggle="tooltip" title="Basketball, Volleyball">
                        <p><i class="fa-solid fa-basketball" aria-hidden="true"></i> Sports d'équipe</p>
                    </div>
                    <div class="col-md-4" data-bs-toggle="tooltip" title="Randonnées, canoë, accrobranche, wakeboard, ski, jeux de société, etc...">
                        <p><i class="fa-solid fa-person-snowboarding" aria-hidden="true"></i> Activités diverses</p>
                    </div>
                </div>
            </article>
        </section>

        <!-------------------------------------- CV --------------------------------------->
        <section id="resume">

            <div class="header-page">
                <h2>CV</h2>
                <span class="title" aria-hidden="true"></span>
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
                                    <h4>Développeuse</h4>
                                    <p><i class="fas fa-industry" aria-hidden="true"></i> TEAMBER (31)<br>
                                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> 01/2020 à ce jour</p>
                                </div>
                                <p>Développement et maintenance d'applications web, principalement en PHP et Drupal, ainsi que développement front-end et intégration web.<br><br>
                                Analyse, correction et migration de données entre différents systèmes. Paramétrage et maintenance d'exports comptables. Support technique et résolution d'incidents sur les applications en production.<br><br>
                                Gestion de projet en collaboration avec un prestataire externe : organisation et priorisation des sprints, suivi des développements, échanges techniques avec les développeurs, planification des déploiements et rédaction des notes de mise à jour.<br><br>
                                Participation au développement du nouveau logiciel en Java / Spring Boot.</p>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Stage de développeur web</h4>
                                    <p><i class="fas fa-industry" aria-hidden="true"></i> CREA2F (31)<br>
                                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> 09/2019 - 10/2019</p>
                                </div>
                                <p>Résolution de bugs, ajout et modification de contenus, création d'un site sous WordPress, sourcing et retouche d'images, rédaction de documentation.</p>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Préparatrice / contrôleuse de commandes</h4>
                                    <p><i class="fas fa-industry" aria-hidden="true"></i> Innoset, Roldan (31) / Katoen Natie, Office dépôt, Distrimag (13)<br>
                                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> 2011 - 2018</p>
                                </div>
                                <p>Conduite de chariot élévateur, chargement de camions, préparation et contrôle de commandes, montage et filmage de palettes, utilisation de logiciels d'entreprise</p>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Accompagnatrice de tourisme équestre</h4>
                                    <p><i class="fas fa-industry" aria-hidden="true"></i> Abrivado ranch (30)<br>
                                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> Été 2011</p>
                                </div>
                                <p>Soins des chevaux, accueil des clients, accompagnement et animation de promenades.</p>
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
                                    <p><i class="fas fa-school" aria-hidden="true"></i> Web Force 3 Toulouse<br>
                                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> 05/2019 - 10/2019</p>
                                </div>
                                <p>Formation intensive au développement web front-end et back-end : HTML, CSS, JavaScript, jQuery/AJAX, PHP, SQL et Symfony. Initiation à React et Angular. Réalisation de projets pratiques individuels et en équipe.</p>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Baccalauréat Technologique Comptabilité et finances des entreprises</h4>
                                    <p><i class="fas fa-school" aria-hidden="true"></i> Lycée Alphonse Daudet (Tarascon - 13)<br>
                                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> 09/2007 - 07/2010</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="main">
                                    <h4>Diplôme équestre - Galop 5</h4>
                                    <p><i class="fas fa-school" aria-hidden="true"></i> CE de Lansac (13)<br>
                                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> 2011</p>
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
                        <p> Curiosité </p>
                    </div>
                    <div class="col-md-3">
                        <p> Persévérance </p>
                    </div>
                    <div class="col-md-3">
                        <p> Autonomie </p>
                    </div>
                    <div class="col-md-3">
                        <p> Rigueur / sens du détail </p>
                    </div>
                    <div class="col-md-3">
                        <p> Esprit d'analyse et critique </p>
                    </div>
                    <div class="col-md-3">
                        <p> Capacité d'adaptation </p>
                    </div>
                    <div class="col-md-3">
                        <p> Polyvalence </p>
                    </div>
                     <div class="col-md-3">
                        <p> Sens du service </p>
                    </div>
                </div>
            </article>

            <div class="subtitle">
                <h3>Compétences</h3>
            </div>
            <article class="container">
                <div class="row skills">
                    <div class="col-md-3 skill">
                        <h4><i class="fab fa-html5" aria-hidden="true"></i> HTML5</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Confirmé">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3 completed"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fab fa-css3-alt" aria-hidden="true"></i> CSS3</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Confirmé">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3 completed"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fab fa-js-square" aria-hidden="true"></i> JavaScript</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Confirmé">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3 completed"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fas fa-database" aria-hidden="true"></i> SQL</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Confirmé">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3 completed"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fab fa-php" aria-hidden="true"></i> PHP</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Confirmé">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3 completed"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fa-brands fa-java" aria-hidden="true"></i> Java</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Débutant">
                            <span class="level1 completed"></span>
                            <span class="level2"></span>
                            <span class="level3"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill wp">
                        <h4><i class="fa-brands fa-wordpress" aria-hidden="true"></i> WordPress</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Intermédiaire">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fa-brands fa-square-git" aria-hidden="true"></i> Git</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Intermédiaire">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fab fa-symfony" aria-hidden="true"></i> Symfony</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Intermédiaire">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill springboot">
                        <h4><img src="img/springboot.png" alt="Logo Spring Boot"> Spring Boot</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Débutant">
                            <span class="level1 completed"></span>
                            <span class="level2"></span>
                            <span class="level3"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><i class="fab fa-drupal" aria-hidden="true"></i> Drupal</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Intermédiaire">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3"></span>
                            <span class="level4"></span>
                        </div>
                    </div>
                    <div class="col-md-3 skill">
                        <h4><img src="img/Talend.png" alt="Logo Talend"> Talend Open Studio</h4>
                        <div class="skill-meter" data-bs-toggle="tooltip" title="Confirmé">
                            <span class="level1 completed"></span>
                            <span class="level2 completed"></span>
                            <span class="level3 completed"></span>
                            <span class="level4"></span>
                        </div>
                    </div>

                </div>
            </article>
        </section>

        <!------------------------------------ PORTFOLIO ------------------------------------>

        <section id="portfolio">
            <div class="header-page">
                <h2>Portfolio</h2>
                <span class="title" aria-hidden="true"></span>
            </div>
            <article class="container">
                <div class="row g-4">

                    <div class="col-md-4 d-flex">
                        <div class="project">
                            <div class="project-preview"><img src="img/projects/south-west-store.png" alt="Aperçu South-West-Store"></div>
                            <div class="project-body">
                                <div>
                                    <div class="project-meta">
                                        <span class="project-type">Site e-commerce</span>
                                        <span class="project-status">Poursuivi personnellement</span>
                                    </div>
                                    <h3 class="project-name">South-West-Store</h3>
                                    <p class="project-desc">Site e-commerce de sneakers développé sous Symfony, initié en formation puis enrichi personnellement : catalogue, recherche et filtres, comptes clients, commandes et back-office.</p>
                                </div>
                                <div class="project-footer">
                                    <div class="project-tags">
                                        <span>Symfony</span><span>PHP</span><span>MySQL</span><span>JavaScript</span><span>Bootstrap</span>
                                    </div>
                                    <div class="project-links">
                                        <button class="open-video-modal" data-video="https://www.youtube.com/embed/oRmfMqgVgf0">Voir la démo ▶</button>
                                        <a href="https://github.com/Estelle-Pratlong-Dev/South-West-Store" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" aria-hidden="true"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="project">
                            <div class="project-preview"><img src="img/projects/mini-erp.png" alt="Aperçu Mini ERP"></div>
                            <div class="project-body">
                                <div>
                                    <div class="project-meta">
                                        <span class="project-type">Logiciel de gestion</span>
                                        <span class="project-status">En cours</span>
                                    </div>
                                    <h3 class="project-name">Mini ERP</h3>
                                    <p class="project-desc">ERP modulaire pour petites entreprises : contacts, catalogue, projets, devis, factures et stocks. Modules activables par client, gestion des rôles et permissions (RBAC).</p>
                                </div>
                                <div class="project-footer">
                                    <div class="project-tags">
                                        <span>Symfony 8</span><span>Doctrine</span><span>MySQL</span><span>API Platform</span><span>EasyAdmin</span>
                                    </div>
                                    <div class="project-links">
                                        <!-- <a href="#" target="_blank" rel="noopener noreferrer"> Voir la démo ▶</a> -->
                                        <p style="color:#00A3E1;">Démo à venir</p>
                                        <a href="https://github.com/Estelle-Pratlong-Dev/mini_erp" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" aria-hidden="true"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="project">
                            <div class="project-preview"><img src="img/projects/mcvitres.png" alt="Aperçu MC-Vitres"></div>
                            <div class="project-body">
                                <div>
                                    <div class="project-meta">
                                        <span class="project-type">Site vitrine</span>
                                        <span class="project-status">Projet professionnel</span>
                                    </div>
                                    <h3 class="project-name">MC-Vitres</h3>
                                    <p class="project-desc">Site vitrine pour une entreprise de nettoyage, conçu avec une interface moderne et responsive pour présenter clairement ses prestations et sa zone d'intervention.</p>
                                </div>
                                <div class="project-footer">
                                    <div class="project-tags">
                                        <span>HTML</span><span>CSS</span><span>jQuery</span><span>Bootstrap</span>
                                    </div>
                                    <div class="project-links">
                                        <a href="https://estelle-pratlong-dev.github.io/mc-vitres-v2/" target="_blank" rel="noopener noreferrer">Voir le projet ↗</a>
                                        <a href="https://github.com/Estelle-Pratlong-Dev/mc-vitres-v2" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" aria-hidden="true"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="project">
                            <div class="project-preview"><img src="img/projects/manalex-fleur.png" alt="Aperçu Manalex Fleurs"></div>
                            <div class="project-body">
                                <div>
                                    <div class="project-meta">
                                        <span class="project-type">Site vitrine</span>
                                        <span class="project-status">En cours</span>
                                    </div>
                                    <h3 class="project-name">Manalex Fleurs</h3>
                                    <p class="project-desc">Site pour un flower truck : présentation du concept, planning des marchés et galerie de créations alimentée dynamiquement en PHP.</p>
                                </div>
                                <div class="project-footer">
                                    <div class="project-tags">
                                        <span>HTML</span><span>CSS</span><span>JavaScript</span><span>PHP</span>
                                    </div>
                                    <div class="project-links">
                                        <a href="https://manalex-fleurs.estelle-pratlong.fr/" target="_blank" rel="noopener noreferrer">Voir le projet ↗</a>
                                        <a href="https://github.com/Estelle-Pratlong-Dev/flower-truck-website" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" aria-hidden="true"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="project">
                            <div class="project-preview"><img src="img/projects/ptites-mains.png" alt="Aperçu Les Ptites Mains d'Estelle"></div>
                            <div class="project-body">
                                <div>
                                    <div class="project-meta">
                                        <span class="project-type">Site vitrine</span>
                                        <span class="project-status">Prototype</span>
                                    </div>
                                    <h3 class="project-name">Les Ptites Mains d'Estelle</h3>
                                    <p class="project-desc">Prototype d'un projet d'activité multiservices de proximité : présentation des prestations, organisation de l'offre et adaptation mobile.</p>
                                </div>
                                <div class="project-footer">
                                    <div class="project-tags">
                                        <span>HTML</span><span>CSS</span><span>JavaScript</span>
                                    </div>
                                    <div class="project-links">
                                        <a href="https://ptites-mains.estelle-pratlong.fr/" target="_blank" rel="noopener noreferrer">Voir le projet ↗</a>
                                        <a href="https://github.com/Estelle-Pratlong-Dev/ptite-mains-website" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" aria-hidden="true"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="project">
                            <div class="project-preview"><img src="img/projects/my-meteo.png" alt="Aperçu My Météo"></div>
                            <div class="project-body">
                                <div>
                                    <div class="project-meta">
                                        <span class="project-type">Application web</span>
                                        <span class="project-status">Projet de formation</span>
                                    </div>
                                    <h3 class="project-name">My Météo</h3>
                                    <p class="project-desc">Adaptation web d'une app météo Cordova : consultation via API REST et affichage dynamique des données côté client.</p>
                                </div>
                                <div class="project-footer">
                                    <div class="project-tags">
                                        <span>HTML</span><span>CSS</span><span>JavaScript</span><span>AJAX</span><span>API REST</span>
                                    </div>
                                    <div class="project-links">
                                        <a href="https://my-meteo.estelle-pratlong.fr/" target="_blank" rel="noopener noreferrer">Voir le projet ↗</a>
                                        <a href="https://github.com/Estelle-Pratlong-Dev/my-meteo-Cordova" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" aria-hidden="true"></i> GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
        </section>

    </main>

    <footer id="footer">
        <div>
            <a href="tel:0611536708" aria-label="Téléphone"><i class="fas fa-mobile-alt" aria-hidden="true"></i></a>
            <p>Téléphone</p>
        </div>
        <div>
            <a href="mailto:pratlong.estelle@gmail.com" aria-label="Email"><i class="fas fa-envelope" aria-hidden="true"></i></a>
            <p>Email</p>
        </div>
        <div>
            <a href="https://www.linkedin.com/in/estelle-pratlong-dev5871184" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
            <p>LinkedIn</p>
        </div>
        <div>
            <a href="https://github.com/Estelle-Pratlong-Dev?tab=repositories" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fab fa-github" aria-hidden="true"></i></a>
            <p>GitHub</p>
        </div>
    </footer>

    <!-- Modale aperçu projet -->
    <div class="modal fade" id="previewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-dark border-0">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-2 pt-0">
                    <img id="previewModalImg" src="" alt="" class="w-100 rounded">
                    <div class="ratio ratio-16x9" id="previewModalVideoWrap" style="display:none;">
                        <iframe id="previewModalIframe" src="" title="Démo" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Mon script -->
    <script src="js/script.js"></script>
</body>

</html>
