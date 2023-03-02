
<?php
    // session_start();
?>

<!doctype html>
<html lang="es">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../icons/font/bootstrap-icons.css">

    </head>

    <body class="bg-dark text-white" style="height:100vh">

    
        <div class ="">

            <!-- <div class="col-6 col-md-5 col-lg-4 mx-auto mt-4"> -->
            <div class="col-3  mx-auto">

            <?php
                if(isset($_GET["status"]) AND $_GET["status"] == 'ErrorLogin' ){
            ?>
                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
                    <strong>Datos incorrectos!</strong><br> comunícate con el admin.
                </div>

            <?php
                }
            ?>
                <div class="border-bottom p-2 mb-2">
                    <h3>Gracias!, te esperamos pronto</h3>
                </div>


                <div class="card position-relative">

                    <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>Log in</strong></div>
                    
                    <!-- FORMULARIO -->
                    
                    <form action="loginProceso.php" class="p-4 bg-dark" method="post">

                        <div class="mb-2 ">
                        <label class="text-capitalize form-label" for="" style="font-size:.8rem" >name:</label>
                        <input class="form-control bg-dark text-white border border-right-0" type="text" name="name" value="" required>
                        </div>
                        <div class="mb-2">
                        <label class="text-capitalize form-label" for="" style="font-size:.8rem" >email:</label>
                        <input class="form-control bg-dark text-white" type="text" name="email" value="" required>
                        </div>
                        <div class="mb-2">
                        <label class="text-capitalize form-label" for="" style="font-size:.8rem" >pass:</label>
                        <input class="form-control bg-dark text-white" type="password" name="pass" value="" required>
                        </div>
                        <div   class=" text-center d-grid mt-4">
                        <input  class="p-2 btn btn-outline-success" type="submit" value = "Log in" >
                        <input type="hidden" value = "<?php echo $name ?>" name="id">
                        </div>

                    </form>
                <div>      
            </div>
            
        </div>  
    </body>
</html>