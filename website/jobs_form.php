<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/php/PHPMailer/src/Exception.php';
require 'vendor/php/PHPMailer/src/PHPMailer.php';

// -----
$SEND_TO = "amine@azariz.com";

?>

<?php
// display form if user has not clicked submit
$formsubmit = false;
if (isset($_POST["uid"])) {    // the user has submitted the form
	$formsubmit = true;
  // Check if the "from" input field is filled out
	if ($_POST["messagebody"] && 
		$_POST["fullname"] && 
		$_POST["phone"] && 
		$_POST["objectemail"] && 
		$_FILES["cvattach"] && 
		$_POST["address"]) {
		$uid = uniqid();
	$subject = "Candidature [$uid] - $objectemail";
	$messagebody = $_POST["messagebody"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$fullname = $_POST["fullname"];
	$objectemail = $_POST["objectemail"];
	$sitesource = $_POST["sitesource"];
		// message lines should not exceed 70 characters (PHP rule), so wrap it
	$texttomail = "Offre: $objectemail\r\nSite: $sitesource\r\nNom: $fullname\r\nNuméro de téléphone: $phone\r\nAdresse: $address\r\n\r\n$messagebody";
		// send mail

	$formok = true;
	$errmsg = '';
	$uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['cvattach']['name']));
	if (move_uploaded_file($_FILES['cvattach']['tmp_name'], $uploadfile)) {
			// Upload handled successfully
			// Now create a message
		$mail = new PHPMailer;
		$mail->setFrom('noreply@arma.ma', 'ARMA Environnement');
		$mail->addAddress($SEND_TO);
		$mail->Subject = $subject;
		$mail->msgHTML($texttomail);
			// Attach the uploaded file
		$mail->addAttachment($uploadfile, 'CV');
		if (!$mail->send()) {
			$formok = false;
			$errmsg .= "Mailer error: " . $mail->ErrorInfo;
		}
	} else {
		$formok = false;
		$errmsg .= 'Failed to move file to ' . $uploadfile;
	}

} else {
	$formok = false;
	$toto = $_FILES['cvattach'];
	error_log("Blablabla... $toto", 0);
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php $pageName = "Nous rejoindre | ARMA Environnement" ?>
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
										<li class="breadcrumb-item active" aria-current="page">Candidature spontanée</li>
									</ol>
								</nav>

								<h1 class="page-title">Nous rejoindre</h1>

								<div class="text-bloc content-wrapper no-bg col-md-10 sub-h1">
									<p>Nous considérons que l’Humain est la clé de voûte de notre valeur ajoutée. 

									Au-delà des machines et process, ce sont les hommes et les femmes de ARMA Environnement qui constituent notre richesse et participent à la performance de nos clients.</p>
								</div>

								<div class="row content-bloc  wow fadeIn">
									<div class="col-md-8">
										<div class="small-text-bloc text-only">
											<div class="text">
												<h4><b>Candidature en ligne</b>
													<i class="fas fa-id-card"></i></h4>

													<p>Merci de déposer votre candidature en utilisant ce formulaire, un résponsable des Ressources Humaines vous contactera dans les plus brefs délais.</p>

													<form action="#submit" method="post" enctype="multipart/form-data">
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
															<label for="objectemail">Offre de candidature*</label>
															<select name="objectemail" id="objectemail" class="form-control">
																<option value="Candidature spontanée">Candidature spontanée</option>
															</select>
														</div>

														<div class="form-group">
															<label for="cvattach">Votre CV*</label>
															<input type="file" id="cvattach" name="cvattach" class="form-control" accept="application/pdf,application/msword" />
														</div>

														<div class="form-group">
															<label for="message">Vos motivations*</label>
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
																		Votre message a été envoyé. Merci de nous avoir contacté. Nous traiteront votre demande dans les plus brefs délais. <b>N° candidature #<?= $uid ?></b>
																	</div>
																<?php }else{ ?>
																	<div class="alert alert-danger" role="alert">
																		Un champ manquant ou erreur. Tous les champs sont obligatoires, merci de compléter les champs vides ou réessayer plus tard. <?= $errmsg ?>
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

										<div class="col-md-4">
											<div class="content-bloc">
												<div class="small-text-bloc text-only">
													<div class="text">
														<h4><b>Coordonées</b></h4>

														<p><strong>Tel</strong>: +212 (0) 5 37 63 55 56

															<br /><strong>Fax</strong>: +212 (0) 537 65 55 66

															<br /><strong>E-mail</strong>: contact@arma.ma

															<br /><strong>Adresse</strong>: Avenue Mehdi Ben Barka 
														Lot Soumia, Lot N°5 Souissi, Rabat, Maroc</p>
													</div>
												</div>
											</div>

											<div class="content-bloc" style="height:300px;"><a href="https://goo.gl/maps/bdMm6ZENUuurPq9B9">
												<div class="holder-parent"><div class="image-holder" style="background-image: url('assets/img/content/arma_location.jpg');">&nbsp;</div></div>
											</a></div>
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