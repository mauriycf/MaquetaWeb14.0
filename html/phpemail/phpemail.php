<?php

  require 'vendor/autoload.php';

  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'oticmatvenezuelaPhpmailer@gmail.com';
  $mail->Password = 'svhloq0yokn0';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  //$mail->SMTPDebug = 4;

  //$mensaje=$_POST['mensaje'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $email=$_POST['email'];
  $archivoCurriculum = $_FILES["archivoCurriculum"];
  $archivoCedula = $_FILES["archivoCedula"];
  $msg = "";
  $msgExitoso = "";
  $error;

  if ($archivoCurriculum["size"] > 0) {
    $mail->addAttachment($archivoCurriculum["tmp_name"], $archivoCurriculum["name"]);
  }

  if ($archivoCedula["size"] > 0) {
    $mail->addAttachment($archivoCedula["tmp_name"], $archivoCedula["name"]);
  }

  if ($archivoCurriculum["size"] == 0 || $archivoCedula["size"] == 0) {
    $error = '<div class"alert alert-dismissible alert-success"> ' . '<p><strong>Usted tiene que adjuntar La Cédula y El Curriculum...!</strong></p>' . '</div>';
  }else{
    $address = $email;

    $mail->setFrom($address , 'Solicitud de inscripcion de: ' . $nombre . ' ' . $apellido. ' Correo: ' . $email );
    $mail->addAddress($address, 'mauriycf@gmail.com');

    $mail->isHTML( true);

    $mail->Subject = 'Solicitud de inscripcion';
    $mail->Body = 'Solicitud de inscripción para Diplomado en Teledetección
    y Sistemas de Información Geográfica aplicado a la Agricultura <br>' . 'Enviado por: ' . $nombre . ' ' . $apellido . '<br>' .
    'Correo electronico: ' . $email;
    $mail->AltBody = 'OTIC';

    if (!$mail->send()) {
      echo 'El mensaje no pudo ser enviado <br>';
      echo "Error de phpMailer " . $mail->ErrorInfo;
    }else{
      $msgExitoso = "La inscripción fue enviada, por favor espere 24 horas para seguir con la inscripcion";
    }
  }

  ?>

  <?php include 'html/overall/header.html'; ?>

  <?php include 'html/overall/top-nav.html'; ?>

  <section class="main container">
    <div class="row">
      <article class="post clearfix">
        <?php echo $msgExitoso,$error; echo 'Go to: <a href="?view=index"><strong>Inicio<strong></a>'?>
      </article>
    </div>
  </section>

  <?php include 'html/overall/footer.html'; ?>
