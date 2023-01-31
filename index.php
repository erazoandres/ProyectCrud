
<?php
  include_once "../ProyectCrud/php/conection.php";

  $new = new conection();
  $data = $new->get_data_users();
?>

<!doctype html>
<html lang="en">

<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>

</div>

    <div class="container-fluid bg-warning">
      <div class="py-2">
        <header class="text-center text-uppercase">
          <h3 class="display-5">Lorem, ipsum.</h3>
        </header>
      </div>
    </div>

    <div class="container mt-5">

    <div>

      
    
      <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function(alert){
          new bootstrap.Alert(alert)
        });

      </script>
      
    </div>

      <div class="row">

          <div class="col-md-7">

            <div class="card" style="overflow:auto;height:50vh">
              <div class="card card-header bg-primary text-white text-capitalize" style="user-select: none;">
                <strong>table of users data</strong>
              </div>

              <div class="p-1" style="overflow:auto;height:100vh;">
                <table class="table table-bordered table-hover table-striped" style="user-select: none;border-collapse: collapse; width: 100%;">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th scope="col">Name</th>
                      <th>Email</th>
                      <th>Pass</th>
                      <th scope="col">Options</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $i = 0 ; 

                    foreach ($data as $fila){
                      $i++;
                    ?>

                    <tr>
                      <td><strong> <?php echo $i ?><strong> </td>
                      <td><?php echo $fila["nombre"] ?></td>
                      <td><?php echo $fila["email"] ?></td>
                      <td><?php echo $fila["pass"] ?></td>
                      <td class="text-primary"><a href="../ProyectCrud/php/update.php?status=<?php echo $fila["nombre"] ?>">Editar</a></td>
                      <td class="text-danger"> Eliminar</td>
                    </tr>

                    <?php
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>


        <div class="col-md-4">
          <div class="card">
            

            <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>register form</strong></div>
            
            <!-- FORMULARIO -->

            
            <form action="../ProyectCrud/php/insert.php" class="p-3" method="post">

              <div class="mb-1">
                <label class="text-capitalize form-label" for="">name:</label>
                <input class="form-control" type="text" name="name">
              </div>
              <div class="mb-1">
                <label class="text-capitalize form-label" for="">email:</label>
                <input class="form-control" type="text" name="email">
              </div>
              <div class="mb-1">
                <label class="text-capitalize form-label" for="">pass:</label>
                <input class="form-control" type="number" name="pass">
              </div>
              <div class=" text-center d-grid mt-2">
                <input  class="p-2 btn btn-outline-success" type="submit" value = "Registrar" >
              </div>

            </form>

            <div>
              <div class="card card-footer py-0 px-0">
              <?php
                if($_GET["status"] == "err"){
              ?>
            
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  <strong>Faltan datos!</strong> deberias llenarlos todos.

            </div>
            <?php    
            }
            ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-dark text-white fixed-bottom">
      <div>
        <footer class="text-white-50 py-2 text-center">
          stylish with bootstrap 5
        </footer>
      </div>
    </div>

  </body>

</html>