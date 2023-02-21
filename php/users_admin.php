
<?php
  include_once "conection.php";
  include_once "header.php";
  include_once "footer.php"; 

  $sentencia = $conn->prepare("SELECT * FROM users");
  $sentencia->execute();
  $data = $sentencia->fetchAll();

?>

<!-- SCRIPT ALERTA -->
<script>
  var alertList = document.querySelectorAll(".alert");
  alertList.forEach(function(alert){new bootstrap.Alert(alert)});
</script>

<div class="container mt-4 bg-dark" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
  <div class="row ">
      <!-- CONTAINER TABLE -->
      <div class="col-md-6 overflow-auto p-2" style="height:70vh">
        <div class="bg-dark">
    
          
          <div class="">
            
            <div class=" card card-header bg-primary text-white p-2" style="user-select: none">
              <strong> USUARIOS   </strong>
            </div>

            <table class="table table-bordered table-hover table-striped table-dark" style="user-select: none;">
              <thead style="position:sticky;top:0">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Estado</th>
                  <th>Articulos</th>
        
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
                  <td><?php echo $fila["cargo"] ?></td>
                  <td><?php echo $fila["email"] ?></td>
                  <td><?php echo $fila["pass"] ?></td>
                  <td><?php  echo $fila["active"] ?></td>

                  <!-- ICONOS LINK TABLA -->

                  <td class="text-center"><a class="text-info" href="delete_article.php?status=<?php echo $fila["nombre"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
                    <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z"/>
                    <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z"/>
                  </svg></a></td>

                  
                  <td class="text-center"><a class="text-primary" href="update.php?status=<?php  echo $fila["nombre"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg></a></td>

                  <td class="text-center"><a class="text-danger"  href="delete.php?status=<?php echo $fila["nombre"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                  </svg></a></td>

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
      <div class="col-auto mx-auto p-2 mt-3" style="height:70vh;">  
        <div class="card">  

          <div class="card card-header bg-primary text-white user-select-none text-capitalize p-2"> <strong>REGISTRO</strong></div>
          
          <!-- FORMULARIO -->
          <form action="insert.php" class="p-3 bg-dark text-white" method="post">


            <div class="mb-2">
              <label class="text-capitalize form-label mb-0" for="">NOMBRE</label>
              <input class="form-control bg-dark text-white" type="text" name="name">
            </div>
            <div class="mb-2">
              <label class="text-capitalize form-label mb-0" for="">EMAIL</label>
              <input class="form-control bg-dark text-white" type="text" name="email">
            </div>
            <div class="mb-2">
              <label class="text-capitalize form-label mb-0" for="" >PASSWORD</label>
              <input class="form-control bg-dark text-white " type="password" name="pass">
            </div>
            
            <div class="mb-2">
              <label class="text-capitalize form-label mb-0" for="" >CARGO</label>
              <select class="form-control bg-dark text-white mb-0" name="cargo" id="">
                
                <!-- CARGOS -->
                  <option value="Cargo 1">Cargo 1</option>
                  <option value="Cargo 2">Cargo 2</option>
                  <option value="Cargo 3">Cargo 3</option>
                  <option value="Cargo 4">Cargo 4</option>
                  <option value="Cargo 5">Cargo 5</option>
                  <option value="Cargo 6">Cargo 6</option>
                  <option value="Cargo 7">Cargo 7</option>
                  <option value="Cargo 8">Cargo 8</option>
              </select>
            </div>
            
            <div class=" text-center d-grid mt-4">
              <input  class="p-2 btn btn-outline-success" type="submit" value = "Registrar" >
            </div>

          </form>

          <div>

          <!-- ALERTAS -->
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