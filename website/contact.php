<?php
// display form if user has not clicked submit
$formsubmit = false;
if (isset($_POST["uid"])) {    // the user has submitted the form
	$formsubmit = true;
  // Check if the "from" input field is filled out
	if (	$_POST["messagebody"] && 
		$_POST["fullname"] && 
		$_POST["phone"] && 
		$_POST["objectemail"] && 
		$_POST["address"]) {
    $from = "ARMA Environnement (Site)<noreply@arma.ma>"; // sender
$uid = uniqid();
$subject = "Reclamation [$uid]";
$messagebody = $_POST["messagebody"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$fullname = $_POST["fullname"];
$objectemail = $_POST["objectemail"];
$sitesource = $_POST["sitesource"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
$texttomail = "Site: $sitesource\r\nNom: $fullname\r\nNuméro de téléphone: $phone\r\nAdresse: $address\r\n\r\n$messagebody";
    // send mail
mail($objectemail,$subject,$texttomail,"From: $from\n");
    // error_log("To:$objectemail\r\nMessage: $texttomail", 0);
$formok = true;
}else{
	$formok = false;
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php $pageName = "Contact | ARMA Environnement" ?>
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
					<section class="section white-text text-center full-bg" style="background-image: url(assets/img/service-client.png)">
                        <div class="container">
                            <h2 class="section-title wow animated fadeInLeft" data-wow-delay=".2s">ARMA Enviornnement</h2>
							<h3 class="section-subtitle wow animated zoomIn" data-wow-delay=".4s">Service client 24h/24 - 7j/7</h3>
							<p class="wow animated zoomIn" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
					</section>
					<section class="section text-center">
						<div class="container">
							<p class="mb-50 wow animated zoomIn" data-wow-delay=".2s">Le groupe ARMA place le service client au cœur de sa stratégie d’entreprise, et met en place des moyens innovants lui permettant de rester au plus proche de ses clients, recueillir leurs demandes, répondre à leurs besoins ou tout simplement les accompagner et les conseiller dans la mise en place de solutions adaptées à leurs enjeux.</p>
							<div class="logos-list align-items-start justify-content-between">
								<div class="image-text green wow animated fadeIn" data-wow-delay=".4s">
									<img src="assets/img/icons/number.png" alt="number">
									<p class="small">Dédié à la réception des demandes et réclamations des clients et des citoyens, accessible <strong>24h/24, 7j/7</strong></p>
								</div>
								<div class="image-text purple wow animated fadeIn" data-wow-delay=".5s">
									<img src="assets/img/icons/contact.png" alt="contact">
									<p class="small">Notre ligne directe est à votre écoute pour toute consultation ou demande d’information.</p>
								</div>
								<div class="image-text red wow animated fadeIn" data-wow-delay=".6s">
									<img src="assets/img/icons/clean.png" alt="mail">
									<p class="small">Vous pouvez également nous contacter par email à l’adresse suivante : <a href="mailto:contact@arma.ma">contact@arma.ma</a></p>
								</div>
								<div class="image-text orange wow animated fadeIn" data-wow-delay=".7s">
									<img src="assets/img/icons/location.png" alt="location">
									<p class="small"><b>Adresse</b> : Avenue Mehdi Ben Barka Lot Soumia, Lot N°5 Souissi, Rabat, Maroc. <a href="https://goo.gl/maps/bdMm6ZENUuurPq9B9" target="_blank">(Localiser en cliquant ici)</a></p>
								</div>								
							</div>
						</div>
					</section>
					<section class="section white-text text-center full-bg" style="background-image: url(assets/img/contact.png)">
                        <div class="container">
                            <h2 class="section-title wow animated fadeInLeft" data-wow-delay=".2s">TOUJOURS PLUS PROCHES</h2>
							<h3 class="section-subtitle wow animated zoomIn" data-wow-delay=".4s">Service client 24h/24 - 7j/7</h3>
							<p class="wow animated zoomIn" data-wow-delay=".6s">ARMA Environnement place votre satisfaction au cœur de sa stratégie d’entreprise. Nous prenons très au sérieux vos demandes, et restons à votre écoute afin de vous fournir un service irréprochable. Nous nous engageons à traiter votre demande dans les plus brefs délais.</p>
                        </div>
					</section>
					<section class="section text-center">
						<div class="container">
							<h3 class="section-subtitle wow animated zoomIn" data-wow-delay=".4s">Nous contacter</h3>
							<p class="wow animated zoomIn mb-50" data-wow-delay=".6s">Merci de saisir vos informations ainsi que l'objet de votre message ou réclamation, notre équipe est à votre écoute et fera de son mieux pour satisfaire votre demande.</p>

							<div class="row">
								<div class="offset-md-3 col-md-6">
									<form class=" wow animated fadeIn" data-wow-delay=".6s" action="#submit" method="post" >
										<div class="form-group">
											<input type="text" class="form-control" name="fullname" placeholder="Nom & prénom*" value="<?= $_POST["fullname"] ?>">
										</div>

										<div class="form-group">
											<input type="email" class="form-control" name="address" aria-describedby="emailHelp" placeholder="E-mail*" value="<?= $_POST["address"] ?>">
										</div>

										<div class="form-group">
											<input type="tel" class="form-control" name="phone" placeholder="Téléphone*" value="<?= $_POST["phone"] ?>">
										</div>

										<div class="form-group">
											<label for="objectemail">Objet de votre demande*</label>

											<select name="objectemail" id="objectemail" class="form-control">
												<option value="contact@arma.ma">Demande d'information</option>
												<option value="complaints@arma.ma">Réclamation</option>
												<option value="recrutement@arma.ma">Recrutement/Stage</option>
												<option value="contact@arma.ma">Autres</option>
												<!--<option value="contact@aznco.net">Test</option>-->
											</select>
										</div>

										<div class="form-group">
											<label for="message">Votre message*</label>

											<textarea class="form-control" name="messagebody" id="messagebody" cols="20" rows="10"><?= $_POST["messagebody"] ?></textarea>
										</div>

										<div class="form-group form-check">
											<input checked type="checkbox" name="cgucheck" class="form-check-input" id="cgucheck">

											<label class="form-check-label" for="cgucheck" style="line-height:1rem;"><small>J'ai lu et j'accepte les <a href="commingsoon.php">conditions générales</a> d'utilisation, notamment la mention relative à la protection des données personnelles. — Conformément à la loi 09 08, vous disposez d'un droit d'accès, de rectification et d'opposition au traitement de vos données personnelles. Ce traitement a été autorisé par la CNDP sous le n° A-R-H-50/2015.</small></label>
										</div>

										<?php if ($formsubmit) { ?>
											<div class="form-group">
												<?php if ($formok) { ?>
													<div class="alert alert-success" role="alert">
														Votre message a été envoyé. Merci de nous avoir contacté. Nous traiteront votre demande dans les plus brefs délais. <b>N° demande #<?= $uid ?></b>
													</div>
												<?php }else{ ?>
													<div class="alert alert-danger" role="alert">
														Tous les champs sont obligatoires. Merci de compléter les champs vides.
													</div>
												<?php } ?>
											</div>
										<?php } ?>

										<input type="hidden" name="uid" value="<?php echo uniqid(); ?>" />
										<input type="hidden" name="sitesource" value="Arma.ma" />

										<div class="text-right">
											<button type="submit" id="submit" class="btn blue-btn">Envoyer</button>
										</div>
									</form>
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