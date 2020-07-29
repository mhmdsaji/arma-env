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
                                    <h1>Cette page est en construction</h1>
                                    <p class="sub col-md-8 offset-md-2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
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