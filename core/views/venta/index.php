<?php
   include(MODELS_DIR.'header.php');
?>
<body>
    <div class="contenedor">
         <div class="panel_menu">
            <?php  include(MODELS_DIR.'menu.php'); ?> 
         </div>
         <div class="panel_venta">
            
            <div class="col-md-12">
               <div class="col-md-12">
               <h1>htacces</h1>
                    <div class="tabla">
                      <table id="divTabla">
                            <thead>
                               <tr>
                                  <td>Nombre</td>
                                  <td>Apellido</td>
                                  <td>Apeliido 2</td>
                                  <td>Acciones</td>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>Nombre</td>
                                  <td>Apellido</td>
                                  <td>Apeliido 2</td>
                                  <td class="acciones">
                                      <a href="#" class="btn_movements_update accionMove"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        <form action="update.php" method="post" >
                                            <input type="hidden" name="id" value="555">
                                            <input type="hidden" name="modificar" value="555">
                                        </form>
                                      </a>
                                      <a href="#" class="btn_movements_delete accionMove"><i class="fa fa-trash" aria-hidden="true"></i>
                                        <form action="eliminar.php" method="post" >
                                            <input type="hidden" name="id" value="555">
                                            <input type="hidden" name="eliminar" value="555">
                                        </form>
                                      </a>
                                  </td>
                               </tr>
                               
                            </tbody>
                      </table>
                    </div>
               </div>
         </div>
         
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
         $('#divTabla').DataTable();

        $.ajax({
          type: "POST",
          data: $("#session").serialize(),
          url: '_DIR'+'session/session.php',
        }).done(function(res){

        });
         // var p = confirm("Estas seguro?");
         //    if (p == true) {
         //      // alert("feliciddes");
         //    }else{
         //      // alert("digistes que no :(");
         //    }
    });
</script>