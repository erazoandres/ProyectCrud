
<?php
  include_once "../ProyectCrud/php/conection.php";
  include_once "../ProyectCrud/php/header.php";
  include_once "../ProyectCrud/php/footer.php"; 

  $sentencia = $conn->prepare("SELECT * FROM users");
  $sentencia->execute();
  $data = $sentencia->fetchAll();

?>

    <!-- SCRIPT ALERTA -->
    <script>
      var alertList = document.querySelectorAll(".alert");
      alertList.forEach(function(alert){new bootstrap.Alert(alert)});
    </script>

    <div class="container mt-4">
      <div class="row">
          <!-- CONTAINER TABLE -->
          <div class="col-md-7">
            <div class="card" style="overflow:auto;height:65vh">
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
                      <td><a  class="text-primary" href="../ProyectCrud/php/update.php?status=<?php  echo $fila["nombre"] ?>">Editar</a></td>
                      <td><a  class="text-danger"  href="../ProyectCrud/php/delete.php?status=<?php echo $fila["nombre"] ?>">Eliminar</a></td>
                    </tr>

                    <?php
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- CONTAINER FORM -->
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
                <div class="card card-footer p-0">
                <?php
                  #TO FIX
                  if( isset($_GET["status"]) and $_GET["status"] == "err"){
                ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Faltan datos!</strong> revisa nuevo.

            
                <?php    
                  }elseif(isset($_GET["status"]) and $_GET["status"] == "sucess"){
                ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Agregado!</strong> uno mas.

                <?php  
                  }elseif(isset($_GET["status"]) and $_GET["status"] == "del"){
                ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong>Eliminado!</strong> uno menos.
                <?php
                  }elseif (isset($_GET["status"]) and $_GET["status"] == "edit"){
                ?>
                      <div class="alert alert-info alert-dismissible fade show" role="alert">
                      <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong>Editado!</strong> a por otro.
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
      </div>
    </div>