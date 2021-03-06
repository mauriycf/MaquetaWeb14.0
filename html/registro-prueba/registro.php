<?php include 'html/overall/header.html'; ?>

<?php include 'html/overall/top-nav.html'; ?>

<!-- <?php include 'html/registro-prueba/functions.php'; ?>
<?php include 'html/registro-prueba/municipios.php'; ?>
<?php include 'html/registro-prueba/parroquias.php'; ?> -->


<style>

.no {
display:none;
}
.si {
display:block;
}
</style>

<div class="panel panel-default">
    <div class="panel-body">
      <h3 class="info">¡REGISTRO!</h3>
      <form action="?view=phpemailinscripcion"method="POST">
            <div class="modal-body">
                <div class="form">
                    <div class="form-group">
                        <label for="nombre"><span class="glyphicon glyphicon-user"></span> Nombres</label>
                        <input type="text" class="form-control" name="nombre" id="user_login" placeholder="Introducir Nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido"><span class="glyphicon glyphicon-user"></span> Apellidos</label>
                        <input type="text" class="form-control" name="apellido" id="user_login" placeholder="Introducir Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="cedula"><span class="glyphicon glyphicon-lock"></span> Nacionalidad</label>
                        <select class="form-control" id="sel1" name="cedula" required>
                          <option value="0">-</option>
                          <option value="V">V</option>
                          <option value="E">E</option>
                        </select>
                        <label for="pasaporte"><span class="glyphicon glyphicon-user"></span> Cedula</label>
                        <input type="text" class="form-control" name="nroCedula" id="pasaporte" placeholder="Cedula">
                    </div>
                    <div class="form-group">
                        <label for="pasaporte"><span class="glyphicon glyphicon-user"></span> Pasaporte</label>
                        <input type="text" class="form-control" name="pasaporte" id="pasaporte" placeholder="Pasaporte">
                    </div>
                    <div class="form-group">
                        <label for="fechaNacimiento"><span class="glyphicon glyphicon-user"></span> Lugar y Fecha de Nacimiento</label><br>
                        <input type="date" placeholder="dia-mes-año" name="fecha_nac" required><br>
                        <input type="text" class="form-control" name="lugar" id="fechaNacimiento" placeholder="Lugar" required>
                    </div>
                    <div class="form-group">
                        <label for="correoElectronico"><span class="glyphicon glyphicon-user"></span> Correo Electrónico</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono"><span class="glyphicon glyphicon-user"></span> Teléfonos</label>
                        <input type="text" class="form-control" name="telefonoHabitacion" id="telefonoHabitacion" placeholder="Habitacion" >
                        <input type="text" class="form-control" name="telefonoCelular" id="telefonoCelular" placeholder="Celular"  required>
                    </div>
                   <div class="form-group">
                        <label for="domicilio"><span class="glyphicon glyphicon-user"></span> Domicilio Completo</label>
                        <input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Indique(calle,avenida,edificio,piso etc)">
                        <label for="domicilio"> Estado</label>
                        <input type="text" name="estado" required>
                        <label for="domicilio"> Municipio</label>
                        <input type="text" name="municipio" required>
                        <label for="domicilio"> Parroquia</label>
                        <input type="text" name="parroquia" required>
                    </div>
                    <h4 class="info"> Formación Académica</h4>
                    <div class="form-group">
                        <label for="correoElectronico"> Titulo obtenido</label>
                        <select class="form-control" id="sel1" name="tituloObtenido" required>
                          <option value="0" onclick="javascript:nameformdiv.className='no';">-</option>
                          <option value="Bachiller" onclick="javascript:nameformdiv.className='no';">Bachiller</option>
                          <option value="TecnicoSuperior" onclick="javascript:nameformdiv.className='no';">Técnico Superior Universitario</option>
                          <option value="Licenciatura" onclick="javascript:nameformdiv.className='no';">Licenciatura</option>
                          <option value="Ingenieria" onclick="javascript:nameformdiv.className='no';">Ingeniería</option>
                          <option value="Postgrado" onclick="javascript:nameformdiv.className='no';">Postgrado</option>
                          <option value="otro" onclick="javascript:nameformdiv.className='si';">Otros (Indique)</option>
                        </select>
                        <div id="nameformdiv" class="no" >
                        <p>Indique otro</p>
                        <p><input type="text" id="nameformdiv.name" class="input form-control" /></p>
                        </div>
                        <label for="correoElectronico"> Carrera</label>
                        <input type="text" class="form-control" name="carrera" id="carrera" placeholder="Carrera" required>
                        <label for="correoElectronico"> Institución</label>
                        <input type="text" class="form-control" name="institucion" id="institucion" placeholder="Institucion" required>
                    </div>
                    <h4 class="info"> Datos Laborales</h4>
                    <div class="form-group">
                        <label for="profesion"> Profesión/Ocupación</label>
                        <input type="text" class="form-control" name="profesion" id="profesion" placeholder="Profesión/Ocupación" >
                        <label for="nombreEmpresa"> Nombre de la Empresa</label>
                        <input type="text" class="form-control" name="nombreEmpresa" id="nombreEmpresa" placeholder="Nombre de la Empresa" >
                        <label for="direccionTrabajo"> Dirección</label>
                        <input type="text" class="form-control" name="direccionTrabajo" id="direccionTrabajo" placeholder="Dirección" >
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block" id="iniciar_sesion" name="button">Enviar</button>

                </div>
            </div>
            </form>
    </div>
</div>

<?php include 'html/overall/estudios.html'; ?>

<?php include 'html/overall/footer.html'; ?>
