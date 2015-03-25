
<div data-uk-sticky>
  <nav class="tm-navbar uk-navbar uk-navbar-attached">
    <div class="uk-container uk-container-center" >
      <a class="uk-navbar-brand uk-hidden-small" href="http://localhost/proyecto"><img class="uk-margin uk-margin-remove" src="<?php echo $resources.'/img/canarycoach.png'?>" width="200" height="90" title="canarycoach" alt="canarycoach"></a>
      <ul class="uk-navbar-nav uk-hidden-small">
          <li>
                          <!-- <a href="docs/modal.html">Registrarse</a> -->
                          <!-- This is an anchor toggling the modal -->
                          <a href="#my-idRegistrarse" data-uk-modal>Registrarse</a>
                      </li>
                      <li>
                          <!-- <a href="docs/modal.html">Iniciar sesión</a> -->
                          <a href="#my-idIniciarSesion" data-uk-modal>Iniciar sesión</a>
                      </li>
                      <li>
                          <!-- <a href="docs/components.html">Ayuda</a> -->
                          <a href="#my-idAyuda" data-uk-modal>Ayuda</a>
                      </li>
      </ul>
    </div>
  </nav>
</div>
<!-- Esta es la ventana modal para Registrarse -->
        <div id="my-idRegistrarse" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>
                
                <form class="uk-form">
                    <fieldset data-uk-margin>
                        <legend>Registro</legend>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="">Introduzca el nombre de usuario</label>
                            <div class="uk-form-controls">
                                <input type="text" placeholder="usuario">
                                <!-- <span class="uk-form-help-inline">El nombre es incorrecto.</span> -->
                            </div>
                            
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="">Introduzca la contraseña</label>
                            <div class="uk-form-controls">
                                <input type="password" placeholder="contraseña">
                                <!-- <span class="uk-form-help-inline">La contraseña es incorrecta.</span> -->
                            </div>
                        </div>
                        <button class="uk-button">Enviar</button>
                    </fieldset>
                </form>
            </div>
        </div>

        <!-- Esta es la ventana modal para Iniciar sesion -->
        <div id="my-idIniciarSesion" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>
                
                <form class="uk-form">
                    <fieldset data-uk-margin>
                        <legend>Iniciar sesión</legend>
                        <div class="uk-form-row">
                            <button class="uk-button" type="button">Inicia sesión con Facebook</button>
                        </div>
                        <div class="uk-form-row">
                            <button class="uk-button" type="button">Inicia sesión con Google</button>
                        </div>
                        <hr>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="">Introduzca el e-mail</label>
                            <div class="uk-form-controls">
                                <input type="text" placeholder="correo electrónico">
                                <!-- <span class="uk-form-help-inline">El nombre es incorrecto.</span> -->
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="">Introduzca la contraseña</label>
                            <div class="uk-form-controls">
                                <input type="password" placeholder="contraseña">
                                <!-- <span class="uk-form-help-inline">La contraseña es incorrecta.</span> -->
                            </div>
                        </div>
                        <button class="uk-button">Iniciar sesión</button>
                    </fieldset>
                </form>
            </div>
        </div>

        <!-- Esta es la ventana modal para Ayuda -->
        <div id="my-idAyuda" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>
                Esto es una prueba de ventana modal de la Ayuda
            </div>
        </div>