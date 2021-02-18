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
                                            <?php
                                            $content_folder = 'content/highlights/hl1/gallery';
                                            /* AUTO GALLERY COMPONENT FROM FOLDER */ 
                                            echo "<a href='$content_folder/cover.jpg'><img src='$content_folder/cover.jpg'></a>";
                                            $imgs = array_diff(scandir($content_folder.'/'), array('.', '..', '.DS_Store'));
                                            natsort($imgs); /* natural sorting, very important, files are ordered */
                                            foreach ($imgs as $iimg) {
                                                echo "<a href='$content_folder/$iimg'></a>";
                                            }
                                            ?>
                                        </div>
                                        <h3 class="title">Démarrage du contrat de gestion des déchets de la Ville de Marrakech</h3>
                                    </div>
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".5s">
                                        <div class="img-holder gallery-1">
                                            <?php
                                            $content_folder = 'content/highlights/hl4/gallery';
                                            /* AUTO GALLERY COMPONENT FROM FOLDER */ 
                                            echo "<a href='$content_folder/cover.jpg'><img src='$content_folder/cover.jpg'></a>";
                                            $imgs = array_diff(scandir($content_folder.'/'), array('.', '..', '.DS_Store'));
                                            natsort($imgs); /* natural sorting, very important, files are ordered */
                                            foreach ($imgs as $iimg) {
                                                echo "<a href='$content_folder/$iimg'></a>";
                                            }
                                            ?>
                                        </div>
                                        <h3 class="title">ARMA fête ses 9 ans !</h3>
                                    </div>                                       
                                </div>
                                <div class="col-sm-4 masonry-column">
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".6s">
                                        <div class="img-holder gallery-1">
                                            <?php
                                            $content_folder = 'content/highlights/hl2/gallery';
                                            /* AUTO GALLERY COMPONENT FROM FOLDER */ 
                                            echo "<a href='$content_folder/cover.jpg'><img src='$content_folder/cover.jpg'></a>";
                                            $imgs = array_diff(scandir($content_folder.'/'), array('.', '..', '.DS_Store'));
                                            natsort($imgs); /* natural sorting, very important, files are ordered */
                                            foreach ($imgs as $iimg) {
                                                echo "<a href='$content_folder/$iimg'></a>";
                                            }
                                            ?>
                                        </div>
                                        <h3 class="title">Lancement du Centre de Pilotage Opérationnel</h3>
                                    </div>
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".9s">
                                        <div class="img-holder gallery-1">
                                            <?php
                                            $content_folder = 'content/highlights/hl5/gallery';
                                            /* AUTO GALLERY COMPONENT FROM FOLDER */ 
                                            echo "<a href='$content_folder/cover.jpg'><img src='$content_folder/cover.jpg'></a>";
                                            $imgs = array_diff(scandir($content_folder.'/'), array('.', '..', '.DS_Store'));
                                            natsort($imgs); /* natural sorting, very important, files are ordered */
                                            foreach ($imgs as $iimg) {
                                                echo "<a href='$content_folder/$iimg'></a>";
                                            }
                                            ?>
                                        </div>
                                        <h3 class="title">Ascension Toubkal, des collaborateurs déterminés à porter au sommet le drapeau d'ARMA</h3>
                                    </div>                                        
                                </div>
                                <div class="col-sm-4 masonry-column">
                                    <div class="arma-project wow animated fadeIn" data-wow-delay=".7s">
                                        <div class="img-holder gallery-1">
                                            <?php
                                            $content_folder = 'content/highlights/hl3/gallery';
                                            /* AUTO GALLERY COMPONENT FROM FOLDER */ 
                                            echo "<a href='$content_folder/cover.jpg'><img src='$content_folder/cover.jpg'></a>";
                                            $imgs = array_diff(scandir($content_folder.'/'), array('.', '..', '.DS_Store'));
                                            natsort($imgs); /* natural sorting, very important, files are ordered */
                                            foreach ($imgs as $iimg) {
                                                echo "<a href='$content_folder/$iimg'></a>";
                                            }
                                            ?>
                                        </div>
                                        <h3 class="title">L'éducation et l'environnement au coeur d'un partenariat signé entre le Groupe ARMA et TIBU Maroc (<a style="color:red" href="content/highlights/hl3/doc1.pdf">Communiqué PDF</a>)</h3>
                                    </div>
                                    <div class="arma-project wow animated fadeIn" data-wow-delay="1s">
                                        <div class="img-holder gallery-1">
                                            <?php
                                            $content_folder = 'content/highlights/hl6/gallery';
                                            /* AUTO GALLERY COMPONENT FROM FOLDER */ 
                                            echo "<a href='$content_folder/cover.jpg'><img src='$content_folder/cover.jpg'></a>";
                                            $imgs = array_diff(scandir($content_folder.'/'), array('.', '..', '.DS_Store'));
                                            natsort($imgs); /* natural sorting, very important, files are ordered */
                                            foreach ($imgs as $iimg) {
                                                echo "<a href='$content_folder/$iimg'></a>";
                                            }
                                            ?>
                                        </div>
                                        <h3 class="title">Campagne de sensibilisation aux horaires de collecte nocture à Marrakech</h3>
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