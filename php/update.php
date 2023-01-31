
<?php
   include_once "../php/conection.php";
   include_once "../php/header.php";
   include_once "../php/footer.php";
   
   $name = $_GET["status"];
   $sentencia = $conn->prepare("SELECT * FROM users WHERE nombre = '$name'");
   $sentencia->execute();
   $data = $sentencia->fetch(PDO::FETCH_OBJ);

   $a = $data->nombre;
   $b = $data->email;
   $c = $data->pass;

   $sentencia = $conn->prepare("UPDATE users nombre = '' ")

?>


   <div class ="container-fluid ">

      <div class="col-md-3 mx-auto mt-4">
               <div class="card">

               

                  <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>register form</strong></div>
                  
                  <!-- FORMULARIO -->
                  
                  <form action="../php/updateProcess.php" class="p-4" method="post">

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
                     <input  class="p-2 btn btn-outline-success" type="submit" value = "Actualizar" >
                     <input type="hidden" value = "<?php echo $name ?>" name="id">
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