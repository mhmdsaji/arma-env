<!DOCTYPE html>
<html lang="en">
<head>
	<?php $pageName = "Nos highlights | ARMA Environnement" ?>
	<?php include 'layout/head.php';?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

	<!--map sec-->
	<div class="main one-pager">
		<div class="row no-gutters">
			<!-- Side nav -->
			<?php include 'layout/sideNav.php';?>
			<!-- End side nav -->
			<div id="page-wrapper">				
				<div class="content-area">
                    <section class="section white-text text-center full-bg" style="background-image: url(assets/img/highlight.png)">
                        <div class="container">
                            <h2 class="section-title wow animated fadeInLeft" data-wow-delay=".2s">ARMA Enviornnement</h2>
                            <h3 class="section-subtitle wow animated zoomIn" data-wow-delay=".4s">Nos highlights</h3>
                            <p class="wow animated zoomIn" data-wow-delay=".6s">Moments forts, actualités ou flashs infos, nous partageons avec vous toutes les nouveautés du Groupe ARMA.</p>
                        </div>
                    </section>
                    <section class="section bg-white text-center">
                        <div class="container">
                            <h3 class="section-subtitle wow animated fadeInLeft" data-wow-delay=".4s">Suivez l'actualité de notre activité</h3>
                            <p class="mb-50 wow animated fadeInLeft" data-wow-delay=".4s">En vidéos, photos, ou communiqués de presse, suivez nos highlights et restez connectés à notre actualité.</p>       
                            <div class="row masonry-grid">
                                <div class="col-sm-4 masonry-column">
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".5s">
                                        <div class="img-holder gallery-1">
                                            <a href="content/highlights/hl1/cover.jpg"><img src="content/highlights/hl1/cover.jpg" alt=""></a>
                                            <?php 
                                            /* AUTOMATIQUE LOGOS FROM FOLDER */ 
                                            $content_folder = 'content/highlights/hl1/';
                                            $imgs = array_diff(scandir($content_folder), array('.', '..', '.DS_Store'));
                                            natsort($imgs); /* natural sorting, very important, files are ordered */
                                            foreach ($imgs as $iimg) {
                                                echo "<a href='$content_folder$iimg'></a>";
                                            }
                                            ?>
                                        </div>
                                        <h3 class="title"><a href="#">Démarrage du contrat de gestion des déchets de la Ville de Marrakech</a></h3>
                                    </div>
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".8s">
                                        <div class="img-holder gallery-2">
                                            <a href="assets/img/media/2.png"><img src="assets/img/media/2.png" alt=""></a>
                                            <a href="assets/img/overlays/1.jpg"></a>
                                            <a href="assets/img/overlays/2.jpg"></a>
                                            <a href="assets/img/overlays/3.jpg"></a>
                                            <a href="assets/img/overlays/4.jpg"></a>
                                            <a href="assets/img/overlays/5.jpg"></a>
                                            <a href="assets/img/overlays/6.jpg"></a>
                                            <a href="assets/img/overlays/7.jpg"></a>
                                            <a href="assets/img/overlays/8.jpg"></a>
                                            <a href="assets/img/overlays/9.jpg"></a>
                                        </div>
                                        <h3 class="title"><a href="#">ARMA fête ses 9 ans !</a></h3>
                                    </div>                                        
                                </div>
                                <div class="col-sm-4 masonry-column">
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".6s">
                                        <div class="img-holder gallery-1">
                                            <a href="assets/img/media/5.png"><img src="assets/img/media/6.png" alt=""></a>
                                            <a href="assets/img/overlays/1.jpg"></a>
                                            <a href="assets/img/overlays/2.jpg"></a>
                                            <a href="assets/img/overlays/3.jpg"></a>
                                            <a href="assets/img/overlays/4.jpg"></a>
                                            <a href="assets/img/overlays/5.jpg"></a>
                                            <a href="assets/img/overlays/6.jpg"></a>
                                            <a href="assets/img/overlays/7.jpg"></a>
                                            <a href="assets/img/overlays/8.jpg"></a>
                                            <a href="assets/img/overlays/9.jpg"></a>
                                        </div>
                                        <h3 class="title"><a href="#">Lancement du Centre de Pilotage Opérationnel</a></h3>
                                    </div>
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".9s">
                                        <div class="img-holder gallery-2">
                                            <a href="assets/img/media/2.png"><img src="assets/img/media/1.png" alt=""></a>
                                            <a href="assets/img/overlays/1.jpg"></a>
                                            <a href="assets/img/overlays/2.jpg"></a>
                                            <a href="assets/img/overlays/3.jpg"></a>
                                            <a href="assets/img/overlays/4.jpg"></a>
                                            <a href="assets/img/overlays/5.jpg"></a>
                                            <a href="assets/img/overlays/6.jpg"></a>
                                            <a href="assets/img/overlays/7.jpg"></a>
                                            <a href="assets/img/overlays/8.jpg"></a>
                                            <a href="assets/img/overlays/9.jpg"></a>
                                        </div>
                                        <h3 class="title"><a href="#">Ascension Toubkal, des collaborateurs déterminés à porter au sommet le drapeau d'ARMA</a></h3>
                                    </div>                                        
                                </div>
                                <div class="col-sm-4 masonry-column">
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".7s">
                                        <div class="img-holder gallery-1">
                                            <a href="assets/img/media/5.png"><img src="assets/img/media/4.png" alt=""></a>
                                            <a href="assets/img/overlays/1.jpg"></a>
                                            <a href="assets/img/overlays/2.jpg"></a>
                                            <a href="assets/img/overlays/3.jpg"></a>
                                            <a href="assets/img/overlays/4.jpg"></a>
                                            <a href="assets/img/overlays/5.jpg"></a>
                                            <a href="assets/img/overlays/6.jpg"></a>
                                            <a href="assets/img/overlays/7.jpg"></a>
                                            <a href="assets/img/overlays/8.jpg"></a>
                                            <a href="assets/img/overlays/9.jpg"></a>
                                        </div>
                                        <h3 class="title"><a href="#">L'éducation et l'environnement au coeur d'un partenariat signé entre le Groupe ARMA et TIBU Maroc</a></h3>
                                    </div>
                                    <div class="arma-project wow animated fadeIn" data-wow-delay="1s">
                                        <div class="img-holder gallery-2">
                                            <a href="assets/img/media/2.png"><img src="assets/img/media/3.png" alt=""></a>
                                            <a href="assets/img/overlays/1.jpg"></a>
                                            <a href="assets/img/overlays/2.jpg"></a>
                                            <a href="assets/img/overlays/3.jpg"></a>
                                            <a href="assets/img/overlays/4.jpg"></a>
                                            <a href="assets/img/overlays/5.jpg"></a>
                                            <a href="assets/img/overlays/6.jpg"></a>
                                            <a href="assets/img/overlays/7.jpg"></a>
                                            <a href="assets/img/overlays/8.jpg"></a>
                                            <a href="assets/img/overlays/9.jpg"></a>
                                        </div>
                                        <h3 class="title"><a href="#">Campagne de sensibilisation aux horaires de collecte nocture à Marrakech</a></h3>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <?php include 'layout/footer.php';?>
</body>
</html>