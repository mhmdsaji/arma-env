<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/php/PHPMailer/src/Exception.php';
require 'vendor/php/PHPMailer/src/PHPMailer.php';

// -----
$SEND_TO = "recrutement@arma.ma";

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
	$objectemail = $_POST["objectemail"];
	$subject = "Candidature [$uid] - $objectemail";
	$messagebody = $_POST["messagebody"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$fullname = $_POST["fullname"];
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
		$mail = new PHPMailer();
		$mail->isSendmail();
		$mail->setFrom('noreply@arma.ma', 'ARMA Environnement');
		$mail->addAddress($SEND_TO);
		$mail->Subject = $subject;
		$mail->Body = $texttomail;
				// Attach the uploaded file
		$mail->addAttachment($uploadfile, $_FILES['cvattach']['name']);
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
	<div class="main one-pager">
		<div class="row no-gutters">
			<!-- Side nav -->
			<?php include 'layout/sideNav.php';?>
			<!-- End side nav -->
			<div id="page-wrapper">				
				<div class="content-area">
					<section class="section white-text text-center full-bg" style="background-image: url(assets/img/nous-rejoindre.png)">
						<div class="container">
							<h2 class="section-title wow animated fadeInLeft" data-wow-delay=".2s">ARMA Enviornnement</h2>
							<h3 class="section-subtitle wow animated zoomIn" data-wow-delay=".4s">NOUS REJOINDRE</h3>
							<p class="wow animated zoomIn" data-wow-delay=".6s">Chez Le Groupe ARMA , quelle que soit votre mission, vous ferez la différence en concrétisant vos idées enthousiastes afin de créer de la valeur dans un environnement de travail propice au bien-être et à l’accomplissement de soi.</p>
						</div>
					</section>
					<section class="section bg-white text-center">
						<div class="container">
							<h3 class="section-subtitle wow animated zoomIn" data-wow-delay=".2s">Consultez nos offres d'emplois</h3>
							<p class="wow animated zoomIn" data-wow-delay=".4s">La diversité, le développement de compétences, l’innovation et le bien-être au travail, sont les piliers de base de notre politique RH,  vous permettant ainsi de voir vos projets s’accomplir et de libérer votre potentiel tout en cultivant le leadership, l’excellence et l’agilité,  des valeurs clés qui guident nos actions et challenges au quotidien. Au sein du groupe ARMA, nous fédérons nos équipes autour d’un projet d’entreprise mobilisateur construit sur l’innovation, la création de valeur, l’engagement  sociétale, et le développement d’expertises. Vous vous y voyez déjà ? Envoyez votre candidature et osez l’expérience ARMA !</p>
							<div class="grid-layout content-wrapper wow fadeIn mt-5" data-wow-delay=".6s">
								<div class="card-deck mb-4">
									<div class="card">
										<div class="card-header">
											<img class="card-logo" src="assets/img/icons/logo.png" alt="Arma Environnement">
											<img class="star" src="assets/img/icons/star.png" alt="">
										</div>
										<a href="content/jobs/job1.pdf">
											<div class="card-body">
												<h5 class="card-title">ADMINISTRATEUR APPLICATIF (SYSTEMES D'INFORMATION)</h5>
												<h6 class="card-subtitle mb-2 text-muted">ARMA Environnement</h6>
											</div>
											<div class="card-footer">
												<div class="card-date">LE 01/03/2021 — RABAT, MA</div>
											</div>
										</a>
									</div>
									<div class="card">
										<div class="card-header">
											<img class="card-logo" src="assets/img/icons/logo.png" alt="Arma Environnement">
											<img class="star" src="assets/img/icons/star.png" alt="">
										</div>
										<a href="content/jobs/job2.pdf">
											<div class="card-body">
												<h5 class="card-title">RESPONSABLE DÉVELOPPEMENT RH (RESSOURCES HUMAINES)</h5>
												<h6 class="card-subtitle mb-2 text-muted">ARMA Environnement</h6>
											</div>
											<div class="card-footer">
												<div class="card-date">LE 01/03/2021 — RABAT, MA</div>
											</div>
										</a>
									</div>
									<div class="card">
										<div class="card-header">
											<img class="card-logo" src="assets/img/icons/logo.png" alt="Arma Environnement">
											<img class="star" src="assets/img/icons/star.png" alt="">
										</div>
										<a href="content/jobs/job3.pdf">
											<div class="card-body">
												<h5 class="card-title">RESPONSABLE D’EXPLOITATION (EXPLOITATION)</h5>
												<h6 class="card-subtitle mb-2 text-muted">ARMA Environnement</h6>
											</div>
											<div class="card-footer">
												<div class="card-date">LE 01/03/2021 — RABAT, MA</div>
											</div>
										</a>
									</div>	
								</div>
							</div>
						</div>
					</section>
					<section id="s2" class="section bg-white text-center pt-0">
						<div class="container">
							<h3 class="section-subtitle wow animated zoomIn" data-wow-delay=".2s">Envoyez votre candidature en ligne</h3>
							<p class="wow animated zoomIn" data-wow-delay=".4s">Merci de déposer votre candidature en utilisant ce formulaire, un responsable <br>des Ressources Humaines vous contactera dans les plus brefs délais.</p>
							<div class="col-md-6 offset-md-3 my-5">
								<form class="wow animated fadeIn" data-wow-delay=".6s" action="#submit" method="post" enctype="multipart/form-data">
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
											<option value="Job1">ADMINISTRATEUR APPLICATIF (SYSTEMES D'INFORMATION)</option>
											<option value="Job2">RESPONSABLE DÉVELOPPEMENT RH (RESSOURCES HUMAINES)</option>
											<option value="Job3">RESPONSABLE D’EXPLOITATION (EXPLOITATION)</option>
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
					</section>
				</div>
			</div>
		</div>
	</div>
	<?php include 'layout/footer.php';?>
</body>
</html>