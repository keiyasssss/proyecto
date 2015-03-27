<div class="row">
  <ul class="nav nav-pills">
    <li> <a href="http://localhost/proyecto"><img class="img-responsive" src="<?php echo $resources.'/img/canarycoach.png'?>" width="200" height="90" title="canarycoach" alt="canarycoach"></a></li>
    <li role="presentation"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registrarseModal">Registrarse</button></li>
    <li role="presentation"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#iniciarSesionModal">Iniciar sesión</button></li>
    <!-- <li role="presentation"><button class="btn btn-primary btn-lg" onclick=window.open("<?php echo $base_url; ?>/Contacto","_self")>Contacto</button></li> -->
    <li role="presentation"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contactoModal">Contacto</button></li>    
    <li role="presentation"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ayudaModal">Ayuda</button></li>
  </ul>
</div>

<!-- Modal registrarse -->
<div class="modal fade" id="registrarseModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Registrarse</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="InputNombreReg">Nombre:</label>
            <input type="text" class="form-control" id="InputNombreReg" placeholder="Introduzca su nombre">
          </div>
          <div class="form-group">
            <label for="InputEmailReg">Correo electrónico:</label>
            <input type="email" class="form-control" id="InputEmailReg" placeholder="Introduzca su correo">
          </div>
          <div class="form-group">
            <label for="InputContraseñaReg">Contraseña:</label>
            <input type="password" class="form-control" id="InputContraseñaReg" placeholder="Introduzca su contraseña">
          </div>
          <div class="form-group">
            <label for="InputContraseñaReg2">Repita su contraseña:</label>
            <input type="password" class="form-control" id="InputContraseñaReg2" placeholder="Repita su contraseña">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
        <button type="button" class="btn btn-primary">Registrarse</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal iniciar sesion -->
<div class="modal fade" id="iniciarSesionModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Iniciar sesion</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <button type="button" class="btn btn-primary">Inisiar Sesión con Facebook</button>
            <button type="button" class="btn btn-danger">Inisiar Sesión con Google Pus</button>
          </div>
          <div class="form-group">
            <label for="InputNombreIni">Nombre:</label>
            <input type="text" class="form-control" id="InputNombreIni" placeholder="Introduzca su nombre">
          </div>
          <div class="form-group">
            <label for="InputEmailIni">Correo electrónico:</label>
            <input type="email" class="form-control" id="InputEmailIni" placeholder="Introduzca su correo">
          </div>
          <div class="form-group">
            <label for="InputContraseñaIni">Contraseña:</label>
            <input type="password" class="form-control" id="InputContraseñaIni" placeholder="Introduzca su contraseña">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
        <button type="button" class="btn btn-primary">Iniciar Sesión</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal contacto -->
<div class="modal fade" id="contactoModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Contacto</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="InputNombreReg">Nombre:</label>
            <input type="text" class="form-control" id="InputNombreReg" placeholder="Introduzca su nombre">
          </div>
          <div class="form-group">
            <label for="InputEmailReg">Correo electrónico:</label>
            <input type="email" class="form-control" id="InputEmailReg" placeholder="Introduzca su correo">
          </div>
          <div class="form-group">
            <label for="InputContraseñaReg">Contraseña:</label>
            <input type="password" class="form-control" id="InputContraseñaReg" placeholder="Introduzca su contraseña">
          </div>
          <div class="form-group">
            <label for="InputContraseñaReg2">Repita su contraseña:</label>
            <input type="password" class="form-control" id="InputContraseñaReg2" placeholder="Repita su contraseña">
          </div>
          <div class="form-group">
            <label for="TextArea">Introduzca su texto:</label>
            <textarea class="form-control" rows="3" id="TextAreaCon"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Registrarse</button> -->
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal ayuda -->
<div class="modal fade" id="ayudaModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Iniciar sesion</h4>
      </div>
      <div class="modal-body">
        Aqui la ayuda
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
