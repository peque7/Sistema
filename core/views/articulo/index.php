<?php
   include(MODELS_DIR.'header.php');
?>
<body>
    <div class="contenedor">
        <div class="panel_menu">
            <?php  include(MODELS_DIR.'menu.php'); ?> 
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group row">
                  <label for="example-text-input" class="col-2 col-form-label">Text</label>
                  <div class="col-10">
                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-2 col-form-label">Search</label>
                  <div class="col-10">
                    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">Email</label>
                  <div class="col-10">
                    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-2 col-form-label">URL</label>
                  <div class="col-10">
                    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                  <div class="col-10">
                    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-password-input" class="col-2 col-form-label">Password</label>
                  <div class="col-10">
                    <input class="form-control" type="password" value="hunter2" id="example-password-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-number-input" class="col-2 col-form-label">Number</label>
                  <div class="col-10">
                    <input class="form-control" type="number" value="42" id="example-number-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                  <div class="col-10">
                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-date-input" class="col-2 col-form-label">Date</label>
                  <div class="col-10">
                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-month-input" class="col-2 col-form-label">Month</label>
                  <div class="col-10">
                    <input class="form-control" type="month" value="2011-08" id="example-month-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-week-input" class="col-2 col-form-label">Week</label>
                  <div class="col-10">
                    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-time-input" class="col-2 col-form-label">Time</label>
                  <div class="col-10">
                    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-color-input" class="col-2 col-form-label">Color</label>
                  <div class="col-10">
                    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel_venta">
            <div class="busca_datos">
                <div class="busca_articulo">
                    <form action="busca" method="POST">
                        <div class="content_form">
                          <label class="label_busca_dato">Articulo<i class="fa fa-user" aria-hidden="true"></i></label>
                          <input class="input_busqueda" type="text" name="search">
                          <button>Buscar</button>
                        <div>       
                    </form>
                </div>
            </div>

            <div class="tabla">
                <table class="table">
                  <thead class="thead-inverse">
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table">
                  <thead class="thead-default">
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
                <table>
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


        $.ajax({
          type: "POST",
          data: $("#session").serialize(),
          url: '_DIR'+'session/session.php',
        }).done(function(res){
            alert(res);
        });
    });
</script>