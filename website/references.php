<!DOCTYPE html>
<html lang="en">

<head>
	<?php $pageName = "Nos forces | ARMA Environnement" ?>
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
					<div class="logo"><a href="index.html">
						<img src="assets/img/logo-light.png" alt="ARMA Environnement"></a></div>
						<div class="page row no-gutters">
							<div class="col-md-9 offset-md-1">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">ARMA Environnement</a></li>
										<li class="breadcrumb-item active" aria-current="page">Nos références</li>
									</ol>
								</nav>
								<h1 class="page-title">Un rayonnement national</h1>
								<div class="text-bloc content-wrapper no-bg col-md-10 sub-h1">
									<p>ARMA Environnement est en mesure d’intervenir sur l’ensemble du territoire marocain
										grâce à un large réseau qui couvre actuellement 16 villes. Avec une force de frappe
										de plus 6 500 collaborateurs, vous pourrez compter sur notre réactivité et notre
									efficacité.</p>
								</div>
								<div class="content-bloc wow fadeIn references white-bg pb-40">

									<p>
										<b class="">VILLES ET COLLECTIVITÉS</b>
									</p>
									<hr>
									<div class="row references-slider">
										
										<?php 
										/* AUTOMATIQUE LOGOS FROM FOLDER */ 
										$vlogos_folder = './content/references/villes/';
										$vlogos = array_diff(scandir($vlogos_folder), array('.', '..', '.DS_Store'));
										natsort($vlogos); /* natural sorting, very important, files are ordered */
										foreach ($vlogos as $vlogo) {
											echo "<div><img src='content/references/villes/$vlogo' alt=''></div>";
										}
										?>
									</div>

									<p>
										<b class="">ENTREPRISES ET INDUSTRIELS</b>
									</p>
									<hr>

									<?php 
									/* AUTOMATIQUE LOGOS FROM FOLDER  */
									$logos_folder = './content/references/entreprises/';
									$logos = array_diff(scandir($logos_folder), array('.', '..', '.DS_Store'));
									natsort($logos);  /* natural sorting, very important, files are ordered */
									foreach (array_chunk($logos, 6, true) as $array) {
										echo '<div class="row pb-20">';
										foreach($array as $logo) {
											echo "<div class='col-4 col-md-2 reference'><img src='content/references/entreprises/$logo' alt=''></div>";
										}
										echo '</div>';
									}
									?>
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