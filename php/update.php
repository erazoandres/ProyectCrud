
<?php
   include_once "securitySession.php";
   include_once "conection.php";
   include_once "header.php";
   include_once "footer.php";
   
   $name = $_GET["status"];
   $sentencia = $conn->prepare("SELECT * FROM users WHERE nombre = '$name'");
   $sentencia->execute();
   $data = $sentencia->fetch(PDO::FETCH_OBJ);

   $a = $data->nombre;
   $b = $data->email;
   $c = $data->pass;

   // $sentencia = $conn->prepare("UPDATE users nombre = '' ")

?>


<div class ="container-fluid " style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">

   <div class="col-md-3 mx-auto mt-2">
         <div class="card mb-4">

            <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>UPDATE USERS DATA</strong></div>
            
            <!-- FORMULARIO -->
            
            <form action="updateProceso.php" class="p-4 bg-dark text-white" method="post">

               <div class="mb-2">
                  <label class="text-capitalize form-label mb-0" for="">name:</label>
                  <input class="form-control bg-dark text-white" type="text" name="name" value="<?php echo $a ?>">
               </div>
               <div class="mb-2">
                  <label class="text-capitalize form-label mb-0"  for="">email:</label>
                  <input class="form-control bg-dark text-white" type="text" name="email" value="<?php echo $b ?>">
               </div>
               <div class="mb-2">
                  <label class="text-capitalize form-label mb-0" for="">pass:</label>
                  <input class="form-control bg-dark text-white" type="password" name="pass" value="<?php echo $c ?>">
               </div>
               <div class="mb-2">
                  <label class="text-capitalize form-label mb-0" for="">active:</label>
                  <select class="form-control bg-dark text-white" name="active" id=""><option value="1">Active</option><option value="0">Disable</option></select>
                  <!-- <input class="form-control bg-dark text-white" type="number" name="pass" value="<?php echo $c ?>"> -->
               </div>
               <div class="mb-2">
              <label class="text-capitalize form-label mb-0" for="" >Cargo</label>
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
               <div class=" text-center d-grid mt-3">
                  <input  class="p-2 btn btn-outline-success" type="submit" value = "Actualizar" >
                  <input type="hidden" value = "<?php echo $name ?>" name="id">
               </div>

            </form>

         <div>      
   </div>
</div>


