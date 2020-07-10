<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageName = "ARMA Environnement" ?>
    <?php include 'layout/head.php';?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">
<!-- Preloader -->
<!--START PAGE LOADER-->
<div id="loader">
    <div class="loader center-block">
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
    </div>
</div>
<!--END PAGE LOADER-->
<!-- Preloader End -->

<!--Arma main-->
<div class="main">
    <div class="row no-gutters">
        <!-- Side nav -->
        <?php include 'layout/sideNav.php';?>
        <!-- End side nav -->
        <div id="page-wrapper">
            <div class="overlay">
                <div class="overlay-inner" style="background-image: url(../assets/img/casablanca.jpg);">
                    <img src="../assets/img/casablanca.jpg" alt="background" style="display: none;">
                </div>
                <div class="overlay-inner bg-primary"></div>
            </div>
            <div class="content-area">
                <div class="logo">
                    <a href="index.php"><img src="../assets/img/logo-light.png" alt="ARMA Environnement"></a>
                </div>
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="home-banner" id="home-banner">
                            <div class="home-banner-wrap">
                                <div class="container">
                                    <h1>Engagés pour l’avenir de nos villes</h1>
                                    <p class="sub col-md-8 offset-md-2">
                                        Depuis sa création, ARMA Environnement a développé une expertise particulière en
                                        services à la ville. Forte d’un savoir-faire éprouvé sur l’ensemble du
                                        territoire, ARMA Environnement comprend parfaitement les enjeux auxquels sont
                                        confrontées les villes d’aujourd’hui.
                                    </p>
                                    <a href="#" class="side-menu-toggle btn blue-btn">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-news">
                    <h5 class="news-heading"><b>Arma</b><br/>News</h5>
                    <ul class="arma-news" id="arma-news">
                        <li><a href="#">ARMA Environnement lance une campagne de dépistage massif.</a>
                        </li>
                        <li><a href="#">ARMA Environnement renforce les mesures d'hygiène et de sensibilisation anti COVID-19 au profit de ses collaborateurs.</a>
                        </li>
                        <li><a href="#">ARMA Environnement lance des opérations de désinfection dans les grands villes du Maroc.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php';?>
</body>

</html>