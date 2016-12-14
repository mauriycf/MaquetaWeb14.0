<?php require "html/overall/header.html"; ?>

<?php require "html/overall/top-nav.html"; ?>

<!-- <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form action="" method="post">
        <br><br>
        <h1><p class="text-center">Iniciar Sesion</p></h1>
        <br><br>
        <div class="form-group">
          <label for="user">email</label>
          <input type="email" name="user" id="user" class="form-control">
        </div>
        <div class="form-group">
          <label for="pass">Contraseña</label>
          <input type="password" name="contrasenia" id="contrasenia" class="form-control">
          <br><br>
        </div>
        <div class="form-group">
          <input type="button" name="login" value="login" id="login" class="btn btn-success">
        </div>
        <br>
        <span id="result"></span>
      </form>
    </div>
  </div>
</div> -->


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
        <div class="form">
          <div class="form-group">
            <label for="usrname_or_email"><span class="glyphicon glyphicon-user"></span> Usuario o Email</label>
            <input type="text" class="form-control" id="user_login" placeholder="Introducir Email" >
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
            <input type="password" id="pass_login" placeholder="Introducir Contraseña" class="form-control">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="1" id="session_login" checked>Recordarme</label>
          </div>
          <button type="button" class="btn btn-default btn-success btn-block" id="iniciar_sesion" name="button"><span class="glyphicon glyphicon-off"></span></button>
        </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         <p>¿No estás registrado? <a href="#" data-toggle="modal" data-target="#Registro">Registrate!</a></p>
         <p>¿Contraseña <a href="#" data-toggle="modal" data-target="#Lostpass">perdida?</a></p>
       </div>
    </div>


<?php require "html/overall/footer.html"; ?>
