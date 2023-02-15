<?php
    include_once "header.php";
    include_once "footer.php";
    include_once "conection.php";

    // $name_get = $_GET["userPostSearch"]; REVISAR ESTO DESPUES
    $title = $_POST["userPostSearch"];

    if(isset($name_get)){
            
        $sentencia = $conn->prepare("SELECT * FROM post WHERE writer ='$name_get'");
        $sentencia->execute();
        $res = $sentencia->fetchAll();

    }else{
        $sentencia = $conn->prepare("SELECT * FROM post WHERE title ='$title'");
        $sentencia->execute();
        $res = $sentencia->fetchAll();
    }
?>

<div class="d-flex px-4 row justify-content-center ">
        <div class="p-4 mb-2">
            <h2 style="font-family:Playfair Display, Georgia, Times New Roman, serif" class="text-light">Mira!, esto es lo que encontre:</h2>
        </div>  
    <?php
        foreach($res as $fila){
    ?>
   
    <div class="col-md-3 p-2">

            <a style="text-decoration:none;color:white" href="articleUser.php?title=<?php echo $fila["title"] ?>">

                <h4 class="card card-header fst-italic bg-black"><?php echo $fila["title"] ?></h4>
                <p class="border bg-secondary p-2 text-white mb-0"><strong><?php echo $fila["type"] ?></strong></p>
                <!-- <p class="card card-footer"><?php echo $fila["writer"] ?></p> -->

            </a>
    </div>

    <?php
        }
    ?>
</div>