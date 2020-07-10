<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageName = "Qui sommes-nous? | ARMA Environnement" ?>
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
                    <div class="overlay-inner" style="background-image: url(../assets/img/overlays/1.jpg);">
                        <img src="../assets/img/overlays/1.jpg" alt="background" style="display: none;">
                    </div>
                    <div class="overlay-inner bg-secondary"></div>
                </div>
                <div class="content-area">
                    <div class="logo">
                        <a href="index.html"><img src="../assets/img/logo-light.png" alt="ARMA Environnement"></a>
                    </div>
                    <div class="page row no-gutters">
                        <div class="col-md-8 offset-md-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">ARMA Environnement</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Qui sommes-nous ?</li>
                                </ol>
                            </nav>
                            <h1 class="page-title">Qui sommes-nous ?</h1>

                            <div class="text-bloc content-wrapper no-bg col-md-10">
                                <p>Le Groupe ARMA opère dans les secteurs de l’environnement, de l’énergie et des services. Avec une expertise pointue, une exigence de qualité et un fort ancrage national, le Groupe ARMA est structuré autour de quatre métiers qui constituent ses marques :</p>
                            </div>

                            <div class="text-bloc content-wrapper col-md-10">
                                <h4>ARMA Environnement</h4>
                                Œuvre chaque jour pour rendre nos villes plus propres, mieux aménagées et tout simplement agréable à vivre.<br />Services à la ville et à l’environnement : propreté urbaine, gestion des déchets, espaces verts.
                            </div>

                            <div class="text-bloc content-wrapper col-md-10">
                                <h4>ARMA WATER</h4>
                                <p><strong>Eau & assainissement</strong> <br />
                                Mobilise toute son expérience pour proposer des systèmes innovants dans la collecte et la gestion des eaux usées et pluviales.</p>                            
                            </div>

                            <div class="text-bloc content-wrapper col-md-10">
                                <h4>ARMA ENERGY</h4>                                
                                <p><strong>Énergie et éclairage public</strong><br > 
                                Vous conseille et vous accompagne afin d’adopter les meilleures solutions en matière d’éclairage public. Qualité des installations, maintenance optimisée et gains énergétiques sont nos objectifs prioritaires pour votre ville.</p>
                            </div>
                            <div class="text-bloc content-wrapper col-md-10">
                                <h4>AXIAL FACILITIES</h4>                                
                                <p><strong>Facility management aux entreprises et industriels</strong><br >
                                Propose une palette de services modulables qui permet aux entreprises de gagner en performance. Toujours à l’écoute, AXIAL FACILITIES élabore un projet d’intervention en collaboration avec le client afin de répondre de manière pertinente et spécifique à ses véritables besoins.</p>
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