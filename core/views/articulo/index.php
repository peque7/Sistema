<?php
   include(MODELS_DIR.'header.php');
?>
<body>
    <div class="contenedor">
        <div class="panel_menu">
            <?php  include(MODELS_DIR.'menu.php'); ?> 
        </div>
        <button type="button" class="btn btn-primary btnMo" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus fa-5x" aria-hidden="true"></i>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="col-md-12">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <form action="" id="formSave">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Articulo</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Codigo</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value=""  name='code' id="example-text-input">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
                            <div class="col-10">
                              <input class="form-control" type="search" value=""  name='name' id="example-search-input">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Cantidad</label>
                            <div class="col-10">
                              <input class="form-control" type="email" value=""  name='length' id="example-email-input">
                            </div>
                          </div>
                          
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btnSave">Save changes</button>
                        </div>
                      </div>
                  </form>
            </div>
          </div>
        </div>
        <div class="panel_venta">
            <div class="tabla">
                
                <table class="tablaArticulo">
                    <thead>
                        <tr>
                          <td>Codigo</td>
                          <td>Nombre</td>
                          <td>Existencia</td>
                          <td>Tienda</td>
                          <td>Almacen</td>
                          <td>Estado</td>
                          <td>Registrado</td>
                          <td>Modificado</td>
                          <td></td>
                          <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>83227837</td>
                            <td>sabritas</td>
                            <td>10</td>
                            <td>5</td>
                            <td>5</td>
                            <td>Activo</td>
                            <td>03/02/2017</td>
                            <td>03/02/2017</td>
                            <td>
                                <a href="#" class="btn_movements_update">Modificar</a>
                                <form action="update.php" method="post" >
                                    <input type="hidden" name="id" value="555">
                                </form>
                            </td>
                            <td>
                                <a href="#" class="btn_movements_delete">Eliminar</a>
                                <form action="eliminar.php" method="post" >
                                    <input type="hidden" name="id" value="555">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>83227837</td>
                            <td>sabritas</td>
                            <td>10</td>
                            <td>5</td>
                            <td>5</td>
                            <td>Activo</td>
                            <td>03/02/2017</td>
                            <td>03/02/2017</td>
                            <td>
                                <a href="#" class="btn_movements_update">Modificar</a>
                                <form action="update.php" method="post" >
                                    <input type="hidden" name="id" value="555">
                                </form>
                            </td>
                            <td>
                                <a href="#" class="btn_movements_delete">Eliminar</a>
                                <form action="eliminar.php" method="post" >
                                    <input type="hidden" name="id" value="555">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
         </div>

    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $(".btnSave").click(function(){
           
          type: "POST",
          data: $("#formSave").serialize(),
          url: 'core/models/product/product.php',
        }).done(function(res){
            alert(res);
        });
        

        
        $(".tablaArticulo").DataTable();
        $.ajax({
          type: "POST",
          data: $("#session").serialize(),
          url: '_DIR'+'session/session.php',
        }).done(function(res){
            alert(res);
        });
    });
</script>