<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageName = "ARMA Environnement - En construction" ?>
    <?php include 'layout/head.php';?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--Arma main-->
<div class="main">
    <div class="row no-gutters">
        <!-- Side nav -->
        <?php include 'layout/sideNav.php';?>
        <!-- End side nav -->
        <div id="page-wrapper">
            <div class="overlay">
                <div class="overlay-inner">
                    <img src="assets/img/overlays/1.jpg" alt="background">
                    <img src="assets/img/overlays/2.jpg" alt="background">
                    <img src="assets/img/overlays/3.jpg" alt="background">
                    <img src="assets/img/overlays/4.jpg" alt="background">
                    <img src="assets/img/overlays/7.jpg" alt="background">
                    <img src="assets/img/overlays/10.jpg" alt="background">
                </div>
                <div class="overlay-inner bg-secondary"></div>
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
                                    <h1>Aucune offre pour le moment.</h1>
                                    <p class="sub col-md-8 offset-md-2">
                                    Vous retrouverez ici toutes nos offres d'emploi au fur et à mesure de l'évolution de nos besoins en recrutement. Vous pouvez également soumettre des candidatures spontanées depuis <a style="color:white" href="jobs_form.php">le formulaire dédié</a>.
                                    </p>
                                    <a href="index.php" class="toggle btn blue-btn">Accueil</a>
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