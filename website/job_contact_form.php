<?php
// display form if user has not clicked submit
if (isset($_POST["uid"])) {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if ($_FILES["cvattach"] && $_POST["jobdesc"] && $_POST["name"] && $_POST["phone"] && $_POST["mail"] && $_POST["message"]) {
    $uid = uniqid();
    $jobdesc = $_POST["jobdesc"];
    $mailaddrss = $_POST["mail"];
    $subject = "Candidature [rabat-$uid] - $jobdesc";
    $description = $_POST["description"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $name = $_POST["name"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = "Ville: Rabat\r\nPoste: $jobdesc\r\n\r\nNom: $name\r\nNuméro de téléphone: $phone\r\nAdresse E-mail: $mailaddrss\r\n\r\n$message";
    // FILE ATTACH
    
    $errmsg = '';
    if (array_key_exists('cvattach', $_FILES)) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['cvattach']['name']));
        if (move_uploaded_file($_FILES['cvattach']['tmp_name'], $uploadfile)) {
          
            // Upload handled successfully
            // Now create a message
            // This should be somewhere in your include_path
            require 'site/libs/PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->setFrom('site@derichebourg-rabat.com', 'Site Rabat');
            $mail->addAddress('narjisse.amminou@derichebourg.com', 'Narjisse Amminou');
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            // Attach the uploaded file
            $mail->addAttachment($uploadfile, 'CV');
            if (!$mail->send()) {
                $errmsg .= "Mailer Error: " . $mail->ErrorInfo;
            }
        } else {
            $errmsg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    
    ?>
  <?php if(!$errmsg){ ?>
  <div class="formmsg success uk-alert uk-alert-success">Votre candidature a été envoyé.</div>
  <?php } else { ?>
  <div class="formmsg error uk-alert uk-alert-danger">Une erreur est survenue, merci de nous contacter (<?php echo $errmsg ?>)</div>
  <?php } ?>
   <?php } else { ?>
    <div class="formmsg error uk-alert uk-alert-danger">Tous les champs sont obligatoires</div>
    <?php }} ?>
      <form class="uk-form uk-form-horizontal" id="contact-form" method="post" enctype="multipart/form-data" action="#contact-form">
        <fieldset data-uk-margin>
          <div class="uk-form-row">
            <label class="uk-form-label" for="">Nom et prénom</label>
            <div class="uk-form-controls">
              <input name="name" type="text" placeholder="" class="uk-form-large uk-width-1-1">
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="">Numéro de téléphone</label>
            <div class="uk-form-controls">
              <input name="phone" type="text" placeholder="" class="uk-form-large uk-width-1-1">
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="">Addresse E-mail</label>
            <div class="uk-form-controls">
              <input name="mail" type="text" placeholder="" class="uk-form-large uk-width-1-1">
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="">Offre de candidature</label>
            <div class="uk-form-controls">
              <select name="jobdesc" class="uk-form-large uk-width-1-1">
                <option value="Candidature spontanée">Candidature spontanée</option>
              </select>
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="">Votre CV</label>
            <div class="uk-form-controls">
              <div class="uk-form-file">
                <input name="cvattach" type="file" />
              </div>
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for="">Vos motivations</label>
            <div class="uk-form-controls">
              <textarea rows="7" name="message" placeholder="" class="uk-form-large uk-width-1-1"></textarea>
            </div>
          </div>
          <div class="uk-form-row">
            <label class="uk-form-label" for=""></label>
            <div class="uk-form-controls uk-text-right">
              <button type="reset" class="uk-button uk-form-large">Effacer</button>
              <button type="submit" class="uk-button uk-button-success uk-form-large">Envoyer &raquo;</button>
            </div>
          </div>

        </fieldset>
        <input type="hidden" name="uid" value="<?php echo uniqid(); ?>" />
        <input type="hidden" name="ville" value="Rabat" />
      </form>