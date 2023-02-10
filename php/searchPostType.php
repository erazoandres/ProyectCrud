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

            <h4 class="card card-header fst-italic"><?php echo $fila["title"] ?></h4>
            <p class="border bg-secondary p-2 text-success"><strong><?php echo $fila["type"] ?></strong></p>
    </div>

    <?php
        }
    ?>
</div>