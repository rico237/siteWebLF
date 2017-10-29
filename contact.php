<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="UTF-8">
        <title>Ludwig Fiuza | Architecte d'intérieur &amp; Designer</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!--    Animation CSS    -->
        <link rel="stylesheet" href="css/animate.css">
        <!--    Font awesome css    -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--  Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<!--        <script src='https://www.google.com/recaptcha/api.js'></script> -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <!--[if IE]>  
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
<![endif]-->

    </head>
    <body id="pageContact">
        <div class="contain">
            <div class="container-fluid" id="leContainer">
                <div class="main">
                    <div class="wrapper">
                        <div class="logoPrincipal">
                        	<a href="http://ludwigfiuza.com/">
                            	<div class="imageLogo">
                                <img src="img/LOGO-LF-FULL.svg" alt="Logo de Ludwig Fiuza">
                                <div class="clear"></div>
                            </div>
                            </a>
                            <div class="animated slideInRight ligne"></div>
                            <div class="textLogo animated fadeInDown">
                                <div class="soon">Architecte d'intérieur <span>&amp;</span> Designer</div>
                                <div class="clear"></div>
                            </div>
                            <nav class="menu">
                                <ul>
                                    <li><a href="#"><span>à propos</span></a></li>
                                    <li><a href="#"><span>références</span></a></li>
                                    <li><a href="./contact.php"><span>contact</span></a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="pageContactElements">
                            <h3 class="contact-title">CONTACT</h3>

                            <p>Des questions à propos de votre projet ?</p>

                            <p>Je suis là pour vous aider ! écrivez moi à ou appelez-moi.</p>

                            <div class="row contact_links">
                                <ul>
                                    <li><a href="tel:+33649986284">+33 6 49 98 62 84</a></li>
                                    <li><a href="mailto:contact@ludwigfiuza.com">contact@ludwigfiuza.com</a></li>
                                </ul>
                            </div>

                            <div class="row social_links_div justify-content-md-center">
                                <div class="col-md-1 social-links"><a href="https://www.instagram.com/ludwigfiuza/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></div>
                                <div class="col-md-1 social-links"><a href="https://www.facebook.com/ludwig.u.fiuza" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></div>
                                <div class="col-md-1 social-links"><a href="https://twitter.com/LudwigFiuza" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></div>
                                <div class="col-md-1 social-links"><a href="https://www.linkedin.com/in/ludwig-fiuza-91370173/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></div>
                                <div class="col-md-1 social-links"><a href="https://dribbble.com/LudwigFiuza" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></div>
                            </div>

                            <h3 class="sendMessageTitle">ENVOYER UN MESSAGE</h3>
                            <div class="container">
                                <form id="form_contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="text/plain">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputName" placeholder="Prénom / nom" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="inputMail" aria-describedby="emailHelp" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="inputPhone" placeholder="Téléphone" pattern='\d{10}' required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="descriptionTextarea" rows="3" placeholder="Décrivez votre projet" required></textarea>
                                    </div>

                                    <button class="g-recaptcha btn form-control boutonSubmit"
                                            type="submit"
                                            data-sitekey="6Lde3DUUAAAAAJSC0gj74CuavtKvTGRN0JSdSFp9"
                                            data-callback="onSubmit">
                                        Envoyer
                                    </button>
                                </form>
                            </div>

                            <div class="form-line"></div>
                            
                            <div class="container">
                            	<div class="alert alert-success alert-dismissible fade" role="alert" id="sucessMessage">
                                	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    									<span aria-hidden="true">&times;</span>
  									</button>
	  									<p class="mb-0">Votre message a été envoyé avec succès, votre demande serra traitée dans les plus brefs délais</p>
								</div>
								<div class="alert alert-danger alert-dismissible fade" role="alert" id="alertMessage">
                                	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    									<span aria-hidden="true">&times;</span>
  									</button>
	  									<p class="mb-0">Une erreur est arrivée lors de l'envoi de votre message</p>
								</div>	
							</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script src="js/script.js"></script>

    </body>
</html>