<?php
   include(MODELS_DIR.'header.php');
?>
<body>
    <div class="contenedor">
    <button class="btn btn_primary">hola mudo</button>
        <div class="space_up">
            <div class="indetified_user">
                <section class="title_login">
                          <h2 class="t_loggin">LOGGIN</h2>
                </section>
                <section class="marco marco_rotate2">
                    <section class='marco marco_rotate'>
                        <div class="user">
                          <div class="img_user">
                              <img class='logo_user'src="#">
                          </div>
                        </div>
                        <form id="session" method="POST" action="#">
                              <div class="user_login">
                                  <div class="title_label">
                                      <label class="label_user">Usuario<i <i class="fa fa-user" aria-hidden="true"></i></label>
                                  </div>
                                  <div class="field_text">
                                      <input class="input_login" type="text" name="user">
                                  </div>
                              </div>
                              <div class="user_login">
                                      <div class="title_label">
                                          <label class="label_user">Contraseña</label>
                                      </div>
                                      <div class="field_text">
                                          <input class="input_login" type="password" name="pass">
                                      </div>
                              </div>
                              <div class="user_login">
                                  <div class="btn_enter_user">
                                     <button>Entrar</button>
                                  </div>
                              </div>
                        </form>
                    </section>
                </section>
            </div>
            <div class="separator"></div>
            <div class="register_user">
                  <section class="title_login">
                          <h2 class="t_loggin">REGISTER</h2>
                  </section>
                  <section class="marco marco_rotate2">
                    <section class='marco marco_rotate'>
                        <form id="session" method="POST" action="#">
                              <div class="user_login">
                                  <div class="title_label">
                                      <label class="label_user">Usuario<i class="fa fa-user" aria-hidden="true"></i></label>
                                  </div>
                                  <div class="field_user">
                                      <input class="input_login" type="text" name="user">
                                  </div>
                              </div>
                              <div class="user_login">
                                      <div class="title_label">
                                          <label class="label_user">Contraseña</label>
                                      </div>
                                      <div class="field_pass">
                                          <input class="input_login" type="password" name="pass">
                                      </div>
                              </div>
                              <div class="user_login">
                                      <div class="title_label">
                                          <label class="label_user">Nombre</label>
                                      </div>
                                      <div class="field_pass">
                                          <input class="input_login" type="text" name="name">
                                      </div>
                              </div>
                              <div class="user_login">
                                      <div class="title_label">
                                          <label class="label_user">Apellido Paterno</label>
                                      </div>
                                      <div class="field_pass">
                                          <input class="input_login" type="text" name="apellido_paterno">
                                      </div>
                              </div>
                              <div class="user_login">
                                      <div class="title_label">
                                          <label class="label_user">Apellido Materno</label>
                                      </div>
                                      <div class="field_pass">
                                          <input class="input_login" type="text" name="apellido_materno">
                                      </div>
                              </div>
                              <div class="user_login">
                                      <div class="title_label">
                                          <label class="label_user">Correo</label>
                                      </div>
                                      <div class="field_pass">
                                          <input class="input_login" type="email" name="email">
                                      </div>
                              </div>
                              <div class="user_login">
                                      <div class="title_label">
                                          <label class="label_user">Telefono</label>
                                      </div>
                                      <div class="field_pass">
                                          <input class="input_login" type="tel" name="telefono">
                                      </div>
                              </div>
                              <div class="user_login">
                                  <div class="btn_enter_user">
                                     <button>Registrar</button>
                                  </div>
                              </div>
                        </form>
                    </section>
                  </section>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){

        $.ajax({
          type: "POST",
          data: $("#session").serialize(),
          url: '_DIR'+'session/session.php',
        }).done(function(res){
            alert(res);
        });
    });
</script>
