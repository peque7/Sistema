<?php
   include(MODELS_DIR.'header.php');
?>
<body>
    <div class="contenedor">
        <div class="divSession">
              <div class="marco rotate1">
                <div class="marco rotate2">
                    <div class="logoForm">
                      <img src="logo.png">
                    </div>
                    <div class="divForm">
                      <form class="formSession">
                        <input type='text' class="inputSession" name="user" placeholder='Usuario'>
                        <input type='password' class="inputSession" name="pass" placeholder='Contraseña'>
                        <inpu class="check" type='chekbox'>Recordar?</inpu>
                        <button type="submit" class="btnSession">Login</button>
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
