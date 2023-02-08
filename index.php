
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

    <div class="container mt-4 bg-dark">
      <div class="row ">
          <!-- CONTAINER TABLE -->
          <div class="col-md-6 overflow-auto" style="height:70vh">
            <div class="bg-dark ">
        
              
              <div class="rounded ">
                
                <div class="bg-primary text-white p-2 font-size-2em" style="user-select: none">
                  <strong> Users data</strong>
                </div>

                <table class="table table-bordered table-hover table-striped table-dark" style="user-select: none;">
                  <thead style="position:sticky;top:0">
                    <tr>
                      <th>#</th>
                      <th scope="col">Name</th>
                      <th>Email</th>
                      <th>Pass</th>
                      <th scope="col">Options</th>
                      <th></th>
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
          <div class="col-md-3">
            <div class="card">  

              <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>register form</strong></div>
              
              <!-- FORMULARIO -->
              <form action="../ProyectCrud/php/insert.php" class="p-3 bg-dark text-white" method="post">

                <div class="mb-1">
                  <label class="text-capitalize form-label" for="">name:</label>
                  <input class="form-control bg-dark text-white" type="text" name="name">
                </div>
                <div class="mb-1">
                  <label class="text-capitalize form-label" for="">email:</label>
                  <input class="form-control bg-dark text-white" type="text" name="email">
                </div>
                <div class="mb-1">
                  <label class="text-capitalize form-label" for="">pass:</label>
                  <input class="form-control bg-dark text-white" type="number" name="pass">
                </div>
                <div class=" text-center d-grid mt-2">
                  <input  class="p-2 btn btn-outline-success" type="submit" value = "Registrar" >
                </div>

              </form>

              <div>
                <div class="card card-footer bg-dark my-auto">
                <?php
                  #TO FIX
                  if( isset($_GET["status"]) and $_GET["status"] == "err"){
                ?>
                    <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                      <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong>Faltan datos!</strong> revisa nuevo.
                    </div>

                <?php    
                  }elseif(isset($_GET["status"]) and $_GET["status"] == "sucess"){
                ?>
                    <div class="alert alert-primary alert-dismissible fade show my-0" role="alert">
                      <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong>Agregado!</strong> uno mas.
                    </div>

                <?php  
                  }elseif(isset($_GET["status"]) and $_GET["status"] == "del"){
                ?>
                      <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                        <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>Eliminado,</strong> uno menos.
                        </div>
                <?php
                  }elseif (isset($_GET["status"]) and $_GET["status"] == "edited"){
                ?>
                      <div class="alert alert-info alert-dismissible fade show my-0" role="alert">
                        <button style="overflow:hidden" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>Editado,</strong> a por otro.
                      </div>
                <?php
                  }elseif(isset($_GET["status"]) and $_GET["status"] == "exist"){
                ?>
                    <div class="alert alert-info alert-dismissible fade show my-0" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong>Nombre existente,</strong> prueba otro.
                    </div>
                   
                <?php
                  }elseif(isset($_GET["status"]) and $_GET["status"] == "editedError"){
                ?>
                    <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong>No se edito nada,</strong> revisa.
                    </div>

                <?php
                  }
                ?>
              </div>
            </div>
          </div>
      </div>
    </div>

 

  
