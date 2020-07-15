<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageName = "Chiffre clés | ARMA Environnement" ?>
    <?php include 'layout/head.php';?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!--map sec-->
    <div class="main">
        <div class="row no-gutters">
            <!-- Side nav -->
            <?php include 'layout/sideNav.php';?>
            <!-- End side nav -->
            <div id="page-wrapper">
                <div class="overlay">
                    <div class="overlay-inner" style="background-image: url(assets/img/overlays/1.jpg);">
                        <img src="assets/img/overlays/1.jpg" alt="background" style="display: none;">
                    </div>
                    <div class="overlay-inner bg-secondary"></div>
                </div>
                <div class="content-area">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo-light.png" alt="ARMA Environnement"></a>
                    </div>
                    <div class="page row no-gutters">
                        <div class="col-md-8 offset-md-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">ARMA Environnement</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chiffres clés</li>
                                </ol>
                            </nav>
                            <h1 class="page-title">Chiffres clés</h1>

                            <div class="text-bloc content-wrapper no-bg col-md-10">
                                <div class="stats_section row">
                                    <div class="col-md-4 margin_after_tab text-center">
                                        <div class="stats_section_inner">
                                            <i class="fa fa-user stats_section_icon" aria-hidden="true"></i>
                                            <h3 class="stats_section_heading number-scroll">46</h3>
                                            <p class="small_heading">Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 margin_after_tab text-center">
                                        <div class="stats_section_inner">
                                            <i class="fa fa-handshake stats_section_icon" aria-hidden="true"></i>
                                            <h3 class="stats_section_heading number-scroll">6500</h3>
                                            <p class="small_heading">Collaborateurs </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 margin_after_tab text-center">
                                        <div class="stats_section_inner">
                                            <i class="fas fa-city stats_section_icon" aria-hidden="true"></i>
                                            <h3 class="stats_section_heading number-scroll">27</h3>
                                            <p class="small_heading">Villes</p>
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