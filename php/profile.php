<?php 
   
    include_once "securitySession.php";
    include_once 'conection.php';
    include_once 'header.php';
    include_once 'footer.php';

    $name = $_SESSION["name"];
    $cargo = $_SESSION["cargo"];

    $sentencia = $conn->prepare("SELECT COUNT(*) FROM post WHERE writer = '$name'");
    $sentencia->execute();
    $res = $sentencia->fetch(PDO::FETCH_ASSOC);

    
    $sentencia2 = $conn->prepare("SELECT active FROM users WHERE nombre = '$name'");
    $sentencia2->execute();
    $res2 = $sentencia2->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">


<html>
    <head>
    </head>
    
    <body class="row justify-content-center vh-100 align-items-center">
        
        
        <div class="col-auto text-center mt-5  text-white">
            <div class="mb-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-square alert-infovatar pp-user-avatar avatar-112 photo entered lazyloaded" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                </svg>
            </div>
            <div>
                <h2 class="lead display-3 text-capitalize mb-0"><?php echo $name ?></h2>
                <strong class="lead text-capitalize mark text-dark"><?php echo $cargo ?> </strong>
                <div class="mt-2">
                    <ul style="flex-direction:column;list-style:none" class="d-flex justify-content-center">
                        <li><kbd>Articulos Creados: <?php echo $res["COUNT(*)"] ?></kbd></li>
                        <li><kbd>Estado: <?php echo $res2["active"] ?></kbd></li>
                    </ul>  
                </div>
                
            </div>
        </div>

    </body>
</html>