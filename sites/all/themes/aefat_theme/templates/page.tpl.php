<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="<?php print $front_page; ?>" class="logo" ><span>AEFAT</span></a>
        <!--logo end-->
        <div class="nav notify-row visible-md visible-lg" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu" id="top_menu_content">
                <!-- settings start -->
                <li id="header_inbox_bar" class="dropdown">
                    <a class="dropdown-toggle" href="<?php print $front_page; ?>">
                        <i class="icon-home orange"></i>
                    </a>  
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle green" href="#">
                        <span class="bg-important">L'AEFAT</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">Découvrez l'AEFAT</p>
                        </li>
                        <li>
                            <a href="a-propos">A propos de l'AEFAT</a>
                        </li>
                        <li>
                            <a href="le-mot">Le mot de la présidente</a>
                        </li>
                        <li>
                            <a href="#">Nos statuts</a>
                        </li>
                        <li>
                            <a href="#">Nos activités</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle blue" href="#">
                        <span class="bg-important">Actualité</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">Ne ratez rien de l'actualité! </p>
                        </li>
                        <li>
                            <a href="#">News de l'association</a>
                        </li>
                        <li>
                            <a href="#">Actualité burkinabè</a>
                        </li>
                            
                    </ul>
                </li>
                
                
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle yellow" href="#">
                        <span class="bg-important">Etudier à Toulouse</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">Vous avez le projet d'étuder à Toulouse? </p>
                        </li>
                        <li>
                            <a href="#">Trouvez sa formation</a>
                        </li>
                        <li>
                            <a href="#">Trouvez son logement</a>
                        </li>
                        <li>
                            <a href="#">Les procédures d'admission</a>
                        </li>
                        <li>
                            <a href="#">Les procédures administratives</a>
                        </li>
                        <li>
                            <a href="#">En savoir plus </a>
                        </li>
                        
                    </ul>
                </li>
                
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle red" href="#">
                        <span class="bg-important">Espace membre</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red" > </div>
                        <li>
                            <p class="red">Espace membre </p>
                        </li>
                        <li>
                            <a href="#">Annonces</a>
                        </li>
                        <li>
                            <a href="#">Forum</a>
                        </li>
                        <li>
                            <a href="#">Chat room</a>
                        </li>
                        <li>
                            <a href="#">Sondages</a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
        </div>
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Recherche">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-user green tooltips " title="Connexion ou Inscription"></i>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                    </ul>
                </li>
                <li class="">
                    <a class="tooltips " title="Contact" href="contact">
                        <i class="icon-edit blue "></i>
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse white-bg">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <div class="visible-lg visible-md">
		<?php print render($page['sidebar_first']);?>
                </div>
                <div class="visible-xs visible-sm">
                    <li>
                        <a href="<?php print $front_page; ?>">
                            <i class="icon-home orange"></i>
                            <span>Acceuil</span>
                        </a>  
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <span>L'AEFAT</span>
                        </a>
                        <ul class="sub">
                            <li>
                                <a href="a-propos">A propos de l'AEFAT</a>
                            </li>
                            <li>
                                <a href="le-mot">Le mot de la présidente</a>
                            </li>
                            <li>
                                <a href="#">Nos statuts</a>
                            </li>
                            <li>
                                <a href="#">Nos activités</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li  class="sub-menu">
                        <a href="javascript:;">
                            <span>Actualité</span>
                        </a>
                        <ul class="sub">
                            <li>
                                <a href="#">News de l'association</a>
                            </li>
                            <li>
                                <a href="#">Actualité burkinabè</a>
                            </li>
                                
                        </ul>
                    </li>
                    
                    
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <span>Etudier à Toulouse</span>
                        </a>
                        <ul class="sub">
                            <li>
                                <a href="#">Trouvez sa formation</a>
                            </li>
                            <li>
                                <a href="#">Trouvez son logement</a>
                            </li>
                            <li>
                                <a href="#">Les procédures d'admission</a>
                            </li>
                            <li>
                                <a href="#">Les procédures administratives</a>
                            </li>
                            <li>
                                <a href="#">En savoir plus </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li  class="sub">
                        <a href="javascript:;">
                            <span>Espace membre</span>
                        </a>
                        <ul class="sub">
                            <li>
                                <a href="#">Annonces</a>
                            </li>
                            <li>
                                <a href="#">Forum</a>
                            </li>
                            <li>
                                <a href="#">Chat room</a>
                            </li>
                            <li>
                                <a href="#">Sondages</a>
                            </li>
                            
                        </ul>
                    </li>
                </div>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <?php print render($page['content']); ?>
            
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 &copy; AEFAT by Juste Abel OUEDRAOGO
            <a href="#" class="go-top">
                <i class="icon-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
