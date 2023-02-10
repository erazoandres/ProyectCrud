<?php
    include_once "header.php";
    include_once "footer.php";
    include_once "conection.php";

    

    $name = $_GET["type"];

    $sentencia = $conn->prepare("SELECT * FROM post WHERE type ='$name'");
    $sentencia->execute();

    $res = $sentencia->fetchAll();

    

?>

<div class="p-4 d-flex mt-3 row justify-content-center ">
    <?php
        foreach($res as $fila){
    ?>

   
    <div class="col-md-6 ">

            <h4 class="card card-header fst-italic bg-primary text-white"><?php echo $fila["title"] ?></h4>
            <p class="p-4  mb-0 bg-secondary" style="line-clamp:2 ; -webkit-line-clamp:3 ; overflow:hidden ; display:-webkit-box;-webkit-box-orient:vertical"><?php echo $fila["content"] ?></p>
            <p class="card card-footer  bg-secondary  text-white"><strong><?php echo $fila["type"] ?></strong></p>
    </div>

    <?php
        }
    ?>
</div>