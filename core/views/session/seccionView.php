<?php
   include(MODELS_DIR.'header.php');
?>
<body>
    <div class="contenedor">
        <div class="divSession">
              <div class="marco rotate1">
                <div class="marco rotate2">
                    <div class="logoForm">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="divForm">
                      <form class="formSession">
                        <input type='text' class="inputSession" name="user" placeholder='Usuario'>
                        <input type='password' class="inputSession" name="pass" placeholder='Contraseña'>
                        <inpu class="check" type='checkbox'>
                        <label>Recordarme</label>
                        <input type="checkbox" id="cbox2" value="second_checkbox">
                        <a href="#">Has olvidado tu contraseña</a>
                        <button type="submit" class="btnSession"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
                      </form>
                    </div>
                </div>
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
