
<?php
   include_once "../php/conection.php";

   $name = $_POST["name"];
   $email = $_POST["email"];
   $pass = $_POST["pass"];

   $inst = new conection();
   $conn = $inst->get_conexion();
   // $sentencia = $conn->prepare("UPDATE users SET nombre = '$name' email = '$email' pass = '$pass' WHERE nombre = '$_GET["status"]');
   $sentencia->execute();
?>

<div class="col-md-4">
          <div class="card">

         

            <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>register form</strong></div>
            
            <!-- FORMULARIO -->
            
            <form action="../ProyectCrud/php/insert.php" class="p-4" method="post">

              <div class="mb-3">
                <label class="text-capitalize form-label" for="">name:</label>
                <input class="form-control" type="text" name="name">
              </div>
              <div class="mb-3">
                <label class="text-capitalize form-label" for="">email:</label>
                <input class="form-control" type="text" name="email">
              </div>
              <div class="mb-3">
                <label class="text-capitalize form-label" for="">pass:</label>
                <input class="form-control" type="number" name="pass">
              </div>
              <div class=" text-center d-grid mt-3">
                <input  class="p-2 btn btn-outline-success" type="submit" value = "Registrar" >
              </div>

            </form>

            <div>
              <div class="card card-footer"></div>
            </div>
          </div>
        </div>
      </div>
    </div>