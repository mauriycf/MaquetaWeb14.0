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
  // $mail->SMTPDebug = 3;

  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $cedula = $_POST['cedula'];
  $nroCedula = $_POST['nroCedula'];
  $pasaporte = $_POST['pasaporte'];
  $fecha_nac = $_POST['fecha_nac'];
  $lugar = $_POST['lugar'];
  $email = $_POST['email'];
  $telefonoHabitacion = $_POST['telefonoHabitacion'];
  $telefonoCelular = $_POST['telefonoCelular'];
  $domicilio = $_POST['domicilio'];
  $estado = $_POST['estado'];
  $municipio = $_POST['municipio'];
  $parroquia = $_POST['parroquia'];
  $tituloObtenido = $_POST['tituloObtenido'];
  $carrera = $_POST['carrera'];
  $institucion = $_POST['institucion'];
  $profesion = $_POST['profesion'];
  $nombreEmpresa = $_POST['nombreEmpresa'];
  $direccionTrabajo = $_POST['direccionTrabajo'];

  $error;
    $address = 'oticmatvenezuela@gmail.com';

    $mail->setFrom($address , 'Datos de Inscripcion: ' . 'Nombre: ' . $nombre . 'Apellido: ' . $apellido);
    $mail->addAddress($address, 'oticmatvenezuela@gmail.com');

    $mail->isHTML( true);

    $mail->Subject = 'Solicitud de inscripcion';
    $mail->Body = 'Solicitud de inscripción para Diplomado en Teledetección
    y Sistemas de Información Geográfica aplicado a la Agricultura <br>' . 'Enviado por: ' . $nombre . ' ' . $apellido . '<br>' .
    'Los siguientes datos: <br><br> Cedula: ' . $cedula . 'Número de cedula: ' . $nroCedula . '<br> Pasaporte: ' . $pasaporte . '<br> Fecha de Nacimiento: ' . $fecha_nac .
    '<br> Lugar de nacimiento: ' . $lugar . '<br> email: ' . $email . '<br> Telefono Habitacion: ' . $telefonoHabitacion . '<br> Telefono Celular: ' . $telefonoCelular .
    '<br> Domicilio: ' . $domicilio . '<br> Estado: ' . $estado . '<br> Municipio: ' . $municipio . '<br> Parroquia: ' . $parroquia . '<br> Titulo Obtenido: ' . $tituloObtenido .
    '<br> Carrera: ' . $carrera . '<br> Institucion: ' . $institucion . '<br> Profesion: ' . $profesion . '<br> Nombre de la Empresa: ' . $nombreEmpresa . '<br> Direccion de trabajo: ' . $direccionTrabajo .
    '<br><br> Datos llenos para la inscripcion.';
    $mail->AltBody = 'OTIC';

    if (!$mail->send()) {
      echo 'El mensaje no pudo ser enviado <br>';
      echo "Error de phpMailer " . $mail->ErrorInfo;
    }else{
      $msgExitoso = "La inscripción fue enviada, por favor espere 24 horas para seguir con la inscripcion";
    }
  // }

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
