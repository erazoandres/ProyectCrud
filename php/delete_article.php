
<?php
   include_once "conection.php";
   include_once "header.php";
   include_once "footer.php";
   
   $name = $_GET["status"];
   $sentencia = $conn->prepare("SELECT * FROM post WHERE writer = '$name'");
   $sentencia->execute();
   $data = $sentencia->fetchAll();

?>

   <div class ="container-fluid " style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">

      <div class="col-md-3 mx-auto mt-4">
            <div class="card">

               <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>ELIMINAR ARTICULO</strong></div>
               
               <!-- FORMULARIO -->
               
               <form action="deleteProceso.php" class="p-4 bg-dark text-white" method="post">

                  <div class="mb-3">
                     <label class="text-capitalize form-label" for="">¿Cual quieres eliminar?:</label>
      <!-- Recuerda estilizar esto -->
                     <select class=" d-block bg-dark text-white" id="" name="title" > 
                        <?php 
                            foreach($data as $fila){
                        ?>
                        <option class="p-2" value= "<?php echo  $fila["title"] ?>"> <?php echo  $fila["title"] ?> </option>
                        <?php
                            }
                        ?>
                        
                     </select>
                     
                  </div>
                  
                  <div class=" text-center d-grid mt-3">
                     <input  class="p-2 btn btn-outline-danger" type="submit" value = "Eliminar Articulo" style="font-size:1.2em" >
                     <input type="hidden" value = "<?php echo $name ?>" name="id">
                  </div>

               </form>

            <div>      
      </div>
   </div>