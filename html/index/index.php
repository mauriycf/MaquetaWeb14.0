<?php include 'html/overall/header.html'; ?>

<?php include 'html/overall/top-nav.html'; ?>

<style media="screen">
    .fixed {
        position: fixed;
        top: 0;
        margin: 0px 0px 80px 877px;
    }

    .nav-placeholder {}
</style>

<?php
  if(isset($_POST['btn1']))
  {
    // Parametros a configurar para la conexion de la base de datos
    $host = "localhost";    // sera el valor de nuestra BD
    $basededatos = "Diplomado";    // sera el valor de nuestra BD
    $usuariodb = "root";    // sera el valor de nuestra BD
    $clavedb = "123456";    // sera el valor de nuestra BD

    //Lista de Tablas
    $tabla_db1 = "persona"; 	   // tabla de usuarios


    error_reporting(0); //No me muestra errores

    $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


    if ($conexion->connect_errno) {
        echo "Nuestro sitio experimenta fallos....";
        exit();
    }

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $cedula = $_POST["cedula"];
    $pasaporte = $_POST["pasaporte"];
    $fecha_nac = $_POST["fecha_nac"];
    $lugar = $_POST["lugar"];
    $email = $_POST["email"];
    $telefonoCelular= $_POST["telefonoCelular"];
    $domicilio= $_POST["domicilio"];
    $estados= $_POST["estados"];
    $municipios= $_POST["municipios"];
    $parroquias= $_POST["parroquias"];
    $tituloObtenido= $_POST["tituloObtenido"];
    $carrera= $_POST["carrera"];
    $institucion= $_POST["institucion"];
    $profesion= $_POST["profesion"];
    $nombreEmpresa= $_POST["nombreEmpresa"];
    $direccionTrabajo= $_POST["direccionTrabajo"];

    $conexion->query("INSERT INTO $tabla_db1 (var_nombre, var_apellido, int_nacionalidad, var_pasaporte, date_fecha, var_correo, int_telefono, var_domicilio, int_estado, int_municipio, int_parroquia, int_tituloObtenido, var_carrera, var_institucion, var_profesion, var_nombreEmpresa, var_direccion)
    values ('$nombre','$apellido','$cedula','$pasaporte','$fecha_nac','$lugar','$email','$telefonoCelular','$domicilio','$estados','$municipios','$parroquias',
    '$tituloObtenido','$carrera','$institucion','$profesion','$nombreEmpresa','$direccionTrabajo')");

    include("html/registro-prueba/cerrar_conexion.php");
  }
?>

<div class="container" col-md-9>
    <div class="jumbotron" style="height:600px;">
        <h1 class="titulo-jumbotron">Diplomado en Teledetección <br> y Sistemas de Información Geográfica aplicado a la Agricultura</h1>
        <br>
        <p>Es una necesidad urgente que Venezuela tenga acceso a la tecnología para el fortalecimiento de la actividad agrícola, no solo urge producir lo que nos comemos, urge conocer que, cuánto, cómo y dónde se produce.</p>
        <p>Dentro del conjunto de Tecnologías de Información y Comunicación (TIC), la Teledetección y los Sistemas de Información Geográfica (SIG) son herramientas útiles en la agricultura, la aplicación de estas debe
            ser direccionada en cuatro líneas estratégicas que conduzca a la formación, investigación, innovación y desarrollo del sector agrícola del país; con el fin de impulsar la inclusión del sector en la apropiación de tecnologías de punta para el
            monitoreo continuo de los sistemas de producción.</p>
        <p>
            <a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#myModal">¡Contactanos Aquí!</a><a href="views/app/pdf/procesoDeInscripcion.pdf" target="blank" class="btn btn-primary btn-lg" role="button"> ¡Datos Generales para la Inscripción!</a>
        <br><br>
        <p>Comparte nuestra Página ya en las Redes Sociales: </p>
        <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//mat.gob.ve/diplomado/"> Compartir en Facebook</a>
        <a class="icon-twitter" href="https://twitter.com/home?status=http%3A//mat.gob.ve/diplomado/"> Compartir en Twitter</a>
    </div>
</div>
        </p>

<section class="main container">
    <div class="row">
        <section class="posts col-md-9">
            <article class="post clearfix" id="objetivos">
                <div class="tira"></div>
                <h2 class="post-title">Objetivos</h2>
                <p>Capacitar profesionales en el uso y manejo de Teledeteccion y Sistemas de Informacion Geografica aplicadas a la actividad agrıcola.</p>
                <h2>Perfil del egresado</h2>
                <p class="text-justify">Al término del diplomado los participantes contaran con una amplia perspectiva de los aspectos conceptuales y metodologicos aplicables en el análisis del territorio, ası como del conocimiento y las habilidades requeridas para el uso de
                    las diversas herramientas que ofrecen los software de SIG libre y de código abierto, lo que mejorará la ventaja competitiva de los participantes en el ámbito académico y agrícola.</p>
                <h3>Modalidad de Estudio</h3>
                <p>El diplomado será desarrollado bajo modalidad semi-presencial</p>
                <h3>Duración</h3>
                <p>El plan de estudio del diplomado está estructurado para ser desarrollado en 6 meses, con una duración de 24 semanas y 180 horas académicas.</p>
                <h3>Dirigido A</h3>
                <p>Agricultores, productores, empresarios agrícolas, ingeníeros agrónomos, técnicos agrícolas, ingeníeros forestales, geógrafos, consultores, docentes, estudiantes, investigadores en el área agrícola, cooperativas campesinas.</p>
                <div class="tira"></div>
            </article>

            <article class="post clearfix" id="requisitos">
                <div class="tira"></div>
                <h2 class="post-title">Requisitos</h2>
                <h4>&nbsp;&nbsp;Manejo básico de sistemas operativos.</h4>
                <h4>&nbsp;&nbsp;Manejo básico de "Software de ofimática"</h4>
                <h4>&nbsp;&nbsp;Manejo básico de internet: correo-e, chat, foro.</h4>
                <h2>Número de Participantes</h2>
                <h4>&nbsp;&nbsp;Hasta 200 participantes por cohorte.</h4>
                <div class="tira"></div>
            </article>

            <article class="post clearfix" id="fechasImportantes">
                <div class="tira"></div>
                <h2>Fechas importantes</h2>
                <br>
                <p><b style="font-size: 18px;">Inscripcion:</b>&nbsp;&nbsp; Del 22 de enero al 22 de Febrero de 2017.</p>
                <b style="font-size: 18px;">Inicio de actividades: </b>
                <p>- Taller introductorio: 9 y 10 de Marzo de 2017</p>
                <p>- Comienzo del diplomado: 13 de Marzo de 2017</p>
                <p><b style="font-size: 18px;">Culminación:</b>&nbsp;&nbsp; 13 de Septiembre de 2017</p>
                <p><b style="font-size: 18px;">Entrega de diplomas:</b>&nbsp;&nbsp; 22 de Septiembre de 2017</p>
                <div class="tira"></div>
            </article>

            <article class="post clearfix" id="documentosAdmision">
                <div class="tira"></div>
                <h2>Documentos de admisión</h2>
                <p>Los documentos que los participantes deben cumplir para ser admitidos son:</p>
                <ul style="margin-left:60px;">
                    <li>Fotocopia de la Cédula de Identidad</li>
                    <li>Síntesis curricular con foto adjunta</li>
                </ul>
                <h2>Procesos de inscripción</h2>
                <ul style="margin-left:60px;">
                    <li>Ingresar a: <a href="#" data-toggle="modal" data-target="#myModal">Contactanos</a></li>
                    <li>Llenar y enviar planilla</li>
                    <li>Confirmar inscripción durante el Taller Introductorio</li>
                </ul>
                <h2>Taller Introductorio</h2>
                <p class="text-justify">Como inicio del Diplomado se pretende realizar un Taller Introductorio, el cual tendrá como propósito dar a conocer como está estructurado el Diplomado y cual será la dinámica a seguir en el desarrollo del mismo. Así mismo, se espera facilitar
                    herramientas para que cada participante explore, desarrolle y sistematice los temas contenidos en los módulos, para que posteriormente puedan ser discutidos con los facilitadores en las clases presenciales, en las cuales además se
                    desarrollarán las prácticas. De igual forma será entregado el material correspondiente al modulo I, por lo tanto la participación es obligatoria.</p>
                <ul style="margin-left:60px;">
                    <li>Fecha: 9 y 10 de Marzo de 2017</li>
                    <li>Lugar: Escuela de Geografía, Universidad de Los Andes, Mérida, Estado Mérida.</li>
                </ul>
                <div class="tira"></div>
            </article>

            <article class="post clearfix" id="certificacion">
                <div class="tira"></div>
                <h2>Certificación</h2>
                <p>Serán acreditados los participantes que culminen satisfactoriamente todas las actividades y requerimientos del Diplomado</p>
                <h2 class="post-title">Plan de Estudios</h2>
                <p class="text-justify">El Plan de Estudios contempla tres módulos, dos de los cuales serán impartidos mediante un programa teórico-práctico y el tercer módulo el proyecto de investigación o trabajo final que consiste en la aplicación teórica para la resolución
                    de algún problema en el área agrícola y/o ganadero.</p>
                <p class="text-justify"><b>Módulo 1 Fundamentos (10 semanas):</b> Consiste en 4 materias que cubren los aspectos fundamentales de:
                    <p>(1) Agrimensura y Cartografía</p>
                    <p>(2) Teledetección I</p>
                    <p>(3) Teledetección II</p>
                    <p>(4) Sistemas de Información Geográfica</p>
                </p>
                <p class="text-justify"><b>Módulo 2 Dominio (6 semanas):</b> Consta de 3 materias específicas de las Ciencias agrícolas:
                    <p>(1) Inventario de Cultivos. Manejo de Agua para la Agricultura</p>
                    <p>(2) Cartografía de Suelos. Evaluación de Tierras</p>
                    <p>(3) Manejo del Recurso Suelo y Agua.</p>
                </p>
                <p class="text-justify"><b>Módulo 3 Proyecto:</b> En este módulo los estudiantes llevarán a cabo un proyecto de investigación, realizarán un informe final y una presentación oral ante un comité de expertos. (8 semanas)</p>
                <div class="tira"></div>
            </article>

            <article class="post clearfix" id="metodologia">
                <div class="tira"></div>
                <h2 class="post-title">Metodología</h2>
                <p class="text-justify">El diplomado será desarrollado bajo modalidad semi-presencial, estará alojada a través de la oficina de Tecnologías, Información y Comunicación del Ministerio del Poder Popular
                    para la Agricultura Productiva y Tierras. La parte presencial se llevará a cabo en la Finca Florentino ubicada en el estado Barinas y en algunos sitios del estado de Mérida, adscrita al Ministerio del Poder Popular para la Agricultura Productiva y Tierras. Será requisito para la obtención
                    del Diploma, cumplir con las actividades asignadas y contar con el 75% de asistencia a clases de cada uno de los módulos.</p>
                <p class="text-justify">A efectos de facilitar el desarrollo del diplomado cada participante tendrá acceso a una Biblioteca Digital en la cual podrá acceder a toda la información necesaria para completar cada modulo, la cual estará a disponible a través de internet
                    y será entregada en material físico (CD/DVD) para su consulta oportuna.</p>
                <p class="text-justify">Módulo 2 Dominio: Consta de 3 materias específicas de las Ciencias agrícolas (1) Inventario de Cultivos. Manejo de Agua para la Agricultura (2) Cartografía de Suelos. Evaluación de Tierras (3) Manejo del Recurso Suelo y Agua. (6 semanas)</p>
                <p class="text-justify">Módulo 3 Proyecto: En este módulo los estudiantes llevarán a cabo un proyecto de investigación, realizarán un informe final y una presentación oral ante un comité de expertos. (8 semanas)</p>
                <div class="tira"></div>
            </article>

            <article class="post clearfix" id="resultadosEsperados">
                <div class="tira"></div>
                <h2>Resultados Esperados</h2>
                <p>Al final del Diplomado se espera que el participante tenga la capacidad de:</p>
                <ul style="margin-left:60px;">
                    <li>Reconocer las principales técnicas para el procesamiento digital de imágenes orientadas al sector agrícola.</li>
                    <li>Generar indicadores de rendimiento y productividad a partir de la información obtenida de las imágenes.</li>
                    <li>Optimizar el uso del suelo y agua a partir de la identificación de la variabilidad espacial de las unidades de producción.</li>
                    <li>Implementar un Sistema de Información Geográfico bajo un software libre, que permita realizar una mejor planificación del sector agrícola.</li>
                    <li>Valorar la potencialidad de aplicar las herramientas de Teledeteccion y SIG en el sector con la mirada orientada hacia la precisión, el automatismo y la productividad.</li>
                </ul>
                <div class="tira"></div>
            </article>

        </section>

        <aside id="aside" class="col-md-3 hidden-xs hidden-sm">
            <h4><img src="views/app/images/Logo2.png" alt="">Categorias</h4>
            <div class="list-group">
                <a href="#inicio" class="list-group-item" id="inicio" >Inicio</a>
                <a href="#objetivos" class="list-group-item" id="objetivos" >Objetivos</a>
                <a href="#requisitos" class="list-group-item" id="requisitos" >Requisitos</a>
                <a href="#fechasImportantes" class="list-group-item" id="fechasImportantes" >Fechas importantes</a>
                <a href="#documentosAdmision" class="list-group-item" id="documentosAdmision" >Documentos Admisión</a>
                <a href="#certificacion" class="list-group-item" id="certificacion" >Certificación</a>
                <a href="#metodologia" class="list-group-item" id="metodologia" >Metodología</a>
                <a href="#resultadosEsperados" class="list-group-item" id="resultadosEsperados" >Resultados Esperados</a>
            </div>
        </aside>

    </div>
</section>

<script>
    jQuery(document).ready(function() {

        var navOffset = jQuery("aside").offset().top;

        jQuery("aside").wrap('<div class="nav-placeholder"></div>');
        jQuery(".nav-placeholder").height(jQuery("aside").outerHeight());

        jQuery(window).scroll(function() {
            var scrollPos = jQuery(window).scrollTop();

            if (scrollPos >= navOffset) {
                jQuery("aside").addClass("fixed");
            } else {
                jQuery("aside").removeClass("fixed");
            }

        });

    });

    // $("#inicio").click(function() {
    //     $('html, body').animate({
    //         scrollTo: $("#barra").offset().top
    //     }, 2000);
    // });

    $("a[href^='#']").on("click", function(e) {
      e.preventDefault();
      $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top
      }, 1000);
    });

    if ($(window.location.hash).length > 1) {
      $("html, body").animate({
        scrollTop: $(window.location.hash).offset().top
      }, 1000);
    }
</script>

<?php include 'html/overall/footer.html'; ?>
