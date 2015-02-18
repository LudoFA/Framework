<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Layout du projet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    <?php echo $this->css('/css/layers.min.css'); ?>
    <?php echo $this->css('/css/font-awesome.min.css'); ?>
    <?php echo $this->css('/css/style.css'); ?>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
</head>
<body class="page">

<header role="banner" class="transparent light">
    <div class="row">
        <div class="nav-inner row-content buffer-left buffer-right even clear-after">
            <div id="brand">
                <h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="<?php echo $app->urlFor('root'); ?>"> &lt;Code /udo </a></h1>
            </div><!-- brand -->
            <a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
            <nav>
                <ul class="reset" role="navigation">
                    <li class="menu-item"><a href=">Accueil</a></li>
                    <li class="menu-item"><a href="<?php echo $app->urlFor('tutorial_liste'); ?>">Tutoriaux</a></li>
                    <li class="menu-item"><a href="#">QuickTips</a></li>
                    <li class="menu-item"><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div><!-- row-content -->
    </div><!-- row -->
</header>


<div id="intro-wrap">
    <div id="intro" class="preload darken" data-autoplay="5000" data-navigation="false" data-pagination="true" data-transition="fadeUp">
        <div class="intro-item" style="background-image: url(http://lorempicsum.com/simpsons/1800/600/1);">
            <div class="caption">
                <h2>Le Css</h2>
                <p>Premier cours sur ls CSS </p>
                <a class="button white transparent" href="#">Read More</a>
            </div><!-- caption -->
        </div>
        <div class="intro-item" style="background-image: url(http://lorempicsum.com/simpsons/1800/600/2);">
            <div class="caption">
                <h2>HTML</h2>
                <p>Tout savoir sur le l'HTML 5</p>
                <a class="button white transparent" href="#">Read More</a>
            </div><!-- caption -->
        </div>
    </div><!-- intro -->
</div><!-- intro-wrap -->


<div id="main">
    <section class="row section">
        <div class="row-content buffer even clear-after">
            <div class="column four">
                <div class="small-icon red"><i class="icon icon-paperfly"></i></div>
                <div class="small-icon-text clear-after">
                    <h4>Landing page</h4>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="column four">
                <div class="small-icon red"><i class="icon icon-diamond"></i></div>
                <div class="small-icon-text clear-after">
                    <h4>Portfolio</h4>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="column four last">
                <div class="small-icon red"><i class="icon icon-crown"></i></div>
                <div class="small-icon-text clear-after">
                    <h4>Resume</h4>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="row section">
        <div class="row-content buffer even clear-after">
            <div class="section-title"><h3>Latest News</h3></div>
            <div class="grid-items blog-section masonry-style preload">
                <article class="item column six">
                    <a href="#">
                        <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                        <div class="blog-excerpt">
                            <div class="blog-excerpt-inner">
                                <h5 class="meta-post">Interior design</h5>
                                <h2>A confortable desk</h2>
                            </div><!-- blog-excerpt -->
                        </div><!-- blog-excerpt-inner -->
                    </a>
                </article>
                <article class="item column three">
                    <a href="#">
                        <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                        <div class="blog-excerpt">
                            <div class="blog-excerpt-inner">
                                <h5 class="meta-post">Relax, Hobbies</h5>
                                <h2>How I spend my time</h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- blog-excerpt-inner -->
                        </div><!-- blog-excerpt -->
                    </a>
                </article>
                <article class="item column three">
                    <a href="#">
                        <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                        <div class="blog-excerpt">
                            <div class="blog-excerpt-inner">
                                <h5 class="meta-post">Holidays</h5>
                                <h2>Snow &amp; silence</h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- blog-excerpt -->
                        </div><!-- blog-excerpt-inner -->
                    </a>
                </article>
                <article class="item column three">
                    <a href="#">
                        <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                        <div class="blog-excerpt">
                            <div class="blog-excerpt-inner">
                                <h5 class="meta-post">Music, Headphones</h5>
                                <h2>5 Hi-Fi headphones</h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- blog-excerpt -->
                        </div><!-- blog-excerpt-inner -->
                    </a>
                </article>
                <article class="item column three">
                    <a href="#">
                        <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                        <div class="blog-excerpt">
                            <div class="blog-excerpt-inner">
                                <h5 class="meta-post">Web Design</h5>
                                <h2>Build awesome layouts</h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div><!-- blog-excerpt -->
                        </div><!-- blog-excerpt-inner -->
                    </a>
                </article>
                <article class="item column six">
                    <a href="#">
                        <figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
                        <div class="blog-excerpt">
                            <div class="blog-excerpt-inner">
                                <h5 class="meta-post">Photography, Instagram</h5>
                                <h2>We are all made of stars</h2>
                            </div><!-- blog-excerpt -->
                        </div><!-- blog-excerpt-inner -->
                    </a>
                </article>
                <div class="shuffle-sizer three"></div>
            </div><!-- grid-items -->
            <div class="more-btn"><a class="button transparent aqua" href="#">Read all News</a></div>
        </div>
    </section>
</div><!-- id-main -->

<div class="ligne" id="presentation">
    <div class="container">
        <div class="row">
            ICI UN TEXTE AVEC ANIMATION POUR EXPLIQUE LE BUT DU SITE
        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="row">
            <?php echo Core\Message::affFlashMessage() ?>
            <?php echo $content_for_layout ?>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<?php echo $this->js('/js/plugins.js'); ?>
<?php echo $this->js('/js/beetle.js'); ?>

</body>
</html>