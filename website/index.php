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
    <!--
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
    -->
        <div class="inner img_rot">
            <img src="assets/img/logo-white.png" width="64" height="64" alt="" />
        </div>
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
                <div class="overlay-inner">
                    <img src="assets/img/home_casablanca.jpg" alt="background" style="display: none;">
                    <video autoplay muted loop>
                        <source src="assets/videos/Casablanca.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="overlay-inner bg-primary"></div>
            </div>
            <div class="content-area">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo-light.png" alt="ARMA Environnement"></a>
                </div>
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="home-banner" id="home-banner">
                            <div class="home-banner-wrap">
                                <div class="container">
                                    <h1>Engagés pour l'avenir de <br>nos villes et collectivités</h1>
                                    <div class="home-arma-stats">
                                        <div class="home-arma-stat">
                                            <span class="number"><span class="number-scroll">27</span> villes</span>
                                            <br />dans tout le royaume
                                        </div>
                                        <div class="home-arma-stat">                                        
                                            <span class="number">+3 millions</span>
                                            <br />d'habitants desservis
                                        </div>
                                        <div class="home-arma-stat">
                                            <span class="number"><span class="number-scroll">6500</span></span>
                                            <br />collaborateurs
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php';?>
</body>

</html>