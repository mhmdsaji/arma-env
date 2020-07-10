<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageName = "ARMA Environnement | Engagés pour l’avenir de nos villes" ?>
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
                        <li><a href="#">1. Lorem Ipsum is simply dummy text of the printing and typesetting.</a>
                        </li>
                        <li><a href="#">2. Lorem Ipsum is simply dummy text of the printing and typesetting.</a>
                        </li>
                        <li><a href="#">3. Lorem Ipsum is simply dummy text of the printing and typesetting.</a>
                        </li>
                        <li><a href="#">4. Lorem Ipsum is simply dummy text of the printing and typesetting.</a>
                        </li>
                        <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting.</a>
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