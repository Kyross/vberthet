<!DOCTYPE html>
<html lang='en'>
    <head>
        <!-- Meta Tag -->
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <!-- SEO -->
        <meta name='description' content='Welcome on the website of Vincent Berthet a french student. Open it !'>
        <meta name=”keywords” content='job,Vincent,Berthet,Vincent Berthet,Berthet Vincent,etudiant,student,info,informatique,computing,ingenieur,engineer,dev,junior,portfolio,website,site,Rennes,France,Saint-Etienne,UJM,UWS,ESIR'>
        <meta name='author' content='Vincent Berthet'>
        <meta name='url' content='https://www.vberthet.me'>
        <meta name='copyright' content='vincent berthet'>
        <meta name='robots' content='index,follow'>
        <title>Vincent Berthet</title>
        <link rel='shortcut icon' href='img/vberthet/vb_black_bg_border_512.png'>
        <!-- CSS Stylesheet -->
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel='stylesheet' type='text/css' href='css/project_icons.css'>
        <!-- Web Fonts  -->
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700'>
    </head>
    <body>    
        <!-- Preloader -->
        <div id='preloader'>
        	<div class='loader'></div>
        </div>

        <!-- Home & Menu Section -->
        <header id='home' class='home-section'>
            <div class='header-top-area'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <div class='logo'>
                                <a class='smoth-scroll' href='#home'>
                                    <img src='img/vberthet/vb_white_bg_512.png' alt='logo_ico'/>Vincent <b>Berthet</b>
                                </a>
                            </div>
                        </div>
                        
                        <div class='col-sm-8'>
                            <div class='navigation-menu'>
                                <div class='navbar'>
                                    <div class='navbar-header'>
                                        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                                            <span class='sr-only'>Toggle navigation</span>
                                            <span class='icon-bar'></span>
                                            <span class='icon-bar'></span>
                                            <span class='icon-bar'></span>
                                        </button>
                                    </div>
                                    <div class='navbar-collapse collapse'>
                                        <ul class='nav navbar-nav navbar-right'>
                                            <li>
                                                <a class='smoth-scroll' href='#bio'><div id='nav_bio_content'></div></a>
                                            </li>
                                            <li>
                                                <a class='smoth-scroll' href='#portfolio'><div id='nav_portfolio_content'></div></a>
                                            </li>
                                            <li>
                                                <a class='smoth-scroll' href='#skills'><div id='nav_skills_content'></div></a>
                                            </li>
                                            <li>
                                                <a class='smoth-scroll' href='#contact'><div id='nav_contact_content'></div></a>
                                            </li>
                                            <li>
                                                <a><div id='nav_flag_ico_content' class='flag'></div></a>
                                       		</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='home-section-background' data-stellar-background-ratio='0.6'>
                <div class='display-table'>
                    <div class='display-table-cell'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-md-12 text-center'>
                                    <div class='header-text'>
                                        <p id='preview_text_content'></p>
                                        <h2><span class='typing'></span></h2>
                                        <div class='margin-top-60'>   
                                            <a href='#bio' class='btn btn-circle smoth-scroll'>
                                                <i class='fa fa-angle-double-down animated'></i>
                                            </a>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </header>

        <!-- Bio -->
        <section id='bio' class='bio-section'>
            <div class='row'>       
                <div class='col-md-6 col-sm-12 col-xs-12'>
                    <img class='img-responsive' src='img/bg/me.jpg' draggable='false' alt=''/>
                </div>
                <div class='col-md-6 col-sm-12 col-xs-12'>
                    <div id='bio_content' class='bio'></div>
                </div>   
            </div>
        </section>
        
        <!-- Portfolio -->
        <section id='portfolio' class='portfolio section-space-padding'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='section-title' id='portfolio_title_content'></div>
                    </div>
                </div>
                
                <div class='row'>
                    <ul class='portfolio'>
                        <li class='filter' data-filter='all'>All</li>
                        <li class='filter' data-filter='.WIP'>WIP</li>
                        <li class='filter' data-filter='.2019'>2019</li>
                        <li class='filter' data-filter='.2018'>2018</li>
                        <li class='filter' data-filter='.2017'>2017</li>
                        <li class='filter' data-filter='.2016'>2016</li>
                    </ul>
                </div>
                
                <div class='portfolio-inner'>
                    <div class='row'>
                        <div class='container grid' id='portfolio_content'></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Skills -->
        <section id='skills' class='skills-section section-space-padding'>
            <div class='container'>
            <div class='row'>
                    <div class='col-sm-12'>
                        <div class='section-title' id='skills_title_content'></div>
                    </div>
                </div>
                <div class='row' id='skills_list_content'></div>
            </div>
        </section>
        
        <!-- Contact -->
        <section id='contact' class='contact section-space-padding'>
            <div class='container'>
            <div class='row'>
                    <div class='col-sm-12'>
                        <div class='section-title' id='contact_title_content'></div>
                    </div>
            </div>
                <div class='text-center margin-top-10 margin-bottom-50'>
                    <div class='row' id='contact_info_content'></div>
                </div>
            </div>
        
            <div class='margin-top-80'> 
                <ul class='social-icon' id='contact_social_content'></ul>
            </div>
        </section>
        
        <!-- Footer  -->
        <footer class='footer-section'>
            <div class='container text-center'>
                &copy; <span id='year'></span><a class='smoth-scroll' href='#home'> Vincent Berthet Website</a> - <a href='request.php?type=Notes' >V<span id='release'></span></a> | <span id='footerContent'></span><a class='smoth-scroll' href='#home'> Vincent Berthet</a>
            </div>      
        </footer>
            
        <!-- Javascript Plugins  -->
        <script src='plugin/jquery.min.js'></script>
        <script src='plugin/bootstrap/js/bootstrap.min.js'></script>
        <script src='plugin/stellar.min.js'></script>
        <script src='plugin/typed.min.js'></script>
        <script src='plugin/mixitup.min.js'></script>
        <script src='plugin/gAnalitycs.js'></script>
        <!-- Main Javascript File  -->
        <script src='js/effects.js'></script>
        <script src='js/common_content.js'></script>
        <script src='js/home_content.js'></script>
    </body>
</html>