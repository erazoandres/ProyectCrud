
<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../icons/font/bootstrap-icons.css">
    </head>

    <body class="bg-dark text-white">

    
        <div class ="container">

            <div class="col-6 col-md-5 col-lg-4 mx-auto mt-4">

                <div class="border-bottom p-4 mb-2">
                    <h2>Gracias!, te esperamos pronto</h2>
                </div>


                <div class="card mt-4">

                    <div class="card card-header bg-primary text-white user-select-none text-capitalize"> <strong>Log in</strong></div>
                    
                    <!-- FORMULARIO -->
                    
                    <form action="loginProceso.php" class="p-4 bg-dark" method="post">

                        <div class="mb-3">
                        <label class="text-capitalize form-label" for="">name:</label>
                        <input class="form-control bg-dark text-white" type="text" name="name" value="">
                        </div>
                        <div class="mb-3">
                        <label class="text-capitalize form-label" for="">email:</label>
                        <input class="form-control bg-dark text-white" type="text" name="email" value="">
                        </div>
                        <div class="mb-3">
                        <label class="text-capitalize form-label" for="">pass:</label>
                        <input class="form-control bg-dark text-white" type="password" name="pass" value="">
                        </div>
                        <div class=" text-center d-grid mt-3">
                        <input  class="p-2 btn btn-outline-success" type="submit" value = "Log in" >
                        <input type="hidden" value = "<?php echo $name ?>" name="id">
                        </div>

                    </form>
                <div>      
            </div>
        </div>  
    </body>
</html>