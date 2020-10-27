<?php

namespace portfolio\view;

use portfolio\model\Singleton;

class PrincipalView {

	private $app;
	private $indexLink;
	private $bootstrapJS;
	private $bootstrapCSS;

	public function __construct()
	{
		$this->app = Singleton::getInstance();
		$this->indexLink = $this->app->get("index",'');
		//$this->bootstrapJS = $this->app->request->getRootUri() . 'public/scripts.js';
		//$this->bootstrapCSS = $this->app->request->getRootUri() . 'public/styles.css';
	}

	protected function getMenu() {
		return <<<END
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tondon César</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/banniere.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">A propos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Parcours</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Projets</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenue sur mon site !</div>
                <div class="image"><img class="rounded-circle img-fluid" src="assets/img/photo.jpg" alt="" /></div>
                <br>
                <div class="masthead-heading text-uppercase">TONDON César</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">A propos de moi</a>
            </div>
        </header>
END;
	}

	protected function getContent() {
		return <<<END
<!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">A propos de moi</h2>
                    <br><br>
                </div>
              <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-3 mb-3">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-2x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/cv.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CV</div>
                                <div class="portfolio-caption-subheading text-muted">Curriculum vitæ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 mb-3">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-2x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/email.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lettre</div>
                                <div class="portfolio-caption-subheading text-muted">Lettre de recommandation</div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Parcours</h2>
                    <h3 class="section-subheading text-muted">Expérience professionelle</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/moselle-open.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2012-2017</h4>
                                <h4 class="subheading">Moselle Open</h4>
                                <h5 class="section-subheading text-muted">Bénévole - Temps plein</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Ramasseur de balles pour le tournoi du Moselle Open se déroulant à Metz.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/Logo-RG.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2014</h4>
                                <h4 class="subheading">Roland-Garros</h4>
                                <h5 class="section-subheading text-muted">Bénévole - Temps plein</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">J'ai occupé le poste de ramasseur de balles à Roland Garros pendant trois semaines, du 26 mai au 9 juin.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/RTE-logo.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Avril - Juillet 2020</h4>
                                <h4 class="subheading">RTE Réseau de Transport d'Electricité</h4>
                                <h5 class="section-subheading text-muted">Ingénieur logiciels</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Stage de fin de deuxième année de DUT, d'une durée de 10 semaines.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/RTE-logo.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Juillet - Septembre 2020</h4>
                                <h4 class="subheading">RTE Réseau de Transport d'Electricité</h4>
                                <h5 class="section-subheading text-muted">Développeur applications</h5>
                            </div>
                            <div class="timeline-ending">
                                <p class="text-muted">- Prolongation du sujet de stage, amélioration et finition.</p>
                                <p class="text-muted">- Conception Nouvelle Interface Opérationnelle pour le Centre Exploitation de Nancy</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- parcours univ -->
        <section class="page-section" id="#">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Formation</h2>
                    <h3 class="section-subheading text-muted">Formation</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/logo_iut.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2018-2020</h4>
                                <h4 class="subheading">DUT Informatique</h4>
                                <h5 class="section-subheading text-muted">IUT Nancy-Charlemagne, Nancy</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Le DUT informatique forme des informaticiens généralistes de niveau bac +2 possédant une solide formation théorique et pratique, qui leur permet de s’adapter à l’évolution technologique de l’informatique et de participer à la conception, la réalisation, la mise en oeuvre et l’administration de solutions logicielles correspondant aux besoins des utilisateurs.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/idmc.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2014</h4>
                                <h4 class="subheading">L3 MIASHS parcours MIAGE</h4>
                                <h5 class="section-subheading text-muted">IDMC - Institut des sciences du Digital, Management et Cognition</h5>
                            </div>
                            <div class="timeline-ending"><p class="text-muted">Unique dans le Grand-Est, la licence MIASHS (Mathématiques et
                                Informatique Appliquées aux Sciences Humaines et Sociales)
                                est une formation scientifique réellement pluridisciplinaire idéale
                                pour les étudiants souhaitant rester ouverts à l’étude de disciplines
                                du domaine des sciences humaines et sociales.</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- parcours univ -->
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mes projets</h2>
                    <h3 class="section-subheading text-muted">- - -</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/cartel.jpg" alt="" />
                            <h4>CARTEL</h4>
                            <p class="text-muted">RTE - Réseau de Transport d'Electricité</p>
                            <div class="row">
                                <div class="col-lg-8 mx-auto text-center"><p class="large text">Elle permet à un utilisateur RTE, d'obtenir un
                                    décompte en heures, demi-journées ou jours du
                                    nombre de limitations de la production HTA
                                    demandées à ENEDIS via le SharePoint "APOLLO".</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/uno.png" alt="" />
                            <h4>ICHI</h4>
                            <p class="text-muted">IUT Nancy-Charlemagne</p>
                            <div class="row">
                                <div class="col-lg-8 mx-auto text-center"><p class="large text">Mon projet tutoré au sein de la deuxième année du DUT qui était un jeu multijoueur
                                    avec comme particularité de fonctionner sur un réseau ad-hoc de smartphones.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">- - -</p></div>
                </div>
            </div>
        </section>
END;

	}

	protected function getContact() {
		return <<<END
<!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Me contacter</h2>
                    <h3 class="section-subheading text-muted">cesar.tondon@outlook.fr</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" enctype="multipart/form-data">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Votre Nom *" required="required" data-validation-required-message="Entrez votre nom." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Votre Email *" required="required" data-validation-required-message="Entrez votre email." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Votre Téléphone *" required="required" data-validation-required-message="Entrez votre numéro de téléphone." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="message" id="message" placeholder="Votre Message *" required="required" data-validation-required-message="Entrez votre message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
END;

	}

	protected function getFooter() {
		return <<<END
		<footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Tondon César 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/Glarell"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/tondonc%C3%A9sar/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
END;
	}

	protected function getModals() {
		return <<<END
 <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">CV</h2>
                                    <p class="item-intro text-muted">Curriculum vitæ</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/CV_César_TONDON.png" alt="" />
                                   <ul class="list-inline">
                                        <li>Date: Septembre 2020</li>
                                    </ul>
                                    <form method="get" action="assets/img/about/CV_2020-10-03_César_TONDON.pdf">
                                        <button class="btn btn-primary" type="submit">Télécharger (.pdf)</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Lettre</h2>
                                    <p class="item-intro text-muted">Lettre de recommandation</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/lettre-de-recommandation-1.png" alt="" />
                                   <ul class="list-inline">
                                       <li>Date: Septembre 2020</li>
                                    </ul>
                                    <form method="get" action="assets/img/about/lettre-de-recommandation.pdf">
                                        <button class="btn btn-primary"  type="submit">Télécharger (.pdf)</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="public/scripts.js"></script>
    </body>
</html>
END;

	}

	public function getApp() {
		return $this->app;
	}

	public function getBootstrapJS() {
		return $this->bootstrapJS;
	}

	public function getBootstrapCSS() {
		return $this->bootstrapCSS;
	}

}