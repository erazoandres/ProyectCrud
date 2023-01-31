
<?php
   include_once "../php/conection.php";

   $inst = new conection();
   $sentencia = $inst->get_conexion();
   $name = $_GET["status"];
   $res = $sentencia->prepare("SELECT * FROM users WHERE nombre = '$name'");
   $res->execute();
   $data = $res->fetch(PDO::FETCH_OBJ);

   $a = $data->nombre;
   $b = $data->email;
   $c = $data->pass;


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

   <div class ="container-fluid ">

      <div class="col-md-4 mx-auto mt-4">
               <div class="card">

               

                  <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>register form</strong></div>
                  
                  <!-- FORMULARIO -->
                  
                  <form action="../ProyectCrud/php/insert.php" class="p-4" method="post">

                  <div class="mb-3">
                     <label class="text-capitalize form-label" for="">name:</label>
                     <input class="form-control" type="text" name="name" value="<?php echo $a ?>">
                  </div>
                  <div class="mb-3">
                     <label class="text-capitalize form-label" for="">email:</label>
                     <input class="form-control" type="text" name="email" value="<?php echo $b ?>">
                  </div>
                  <div class="mb-3">
                     <label class="text-capitalize form-label" for="">pass:</label>
                     <input class="form-control" type="number" name="pass" value="<?php echo $c ?>">
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
      </div>
   </body>
</html>