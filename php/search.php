<?php
    include_once "header.php";
    include_once "footer.php";
    include_once "conection.php";

    

    $name = $_POST["userPostSearch"];

    $sentencia = $conn->prepare("SELECT * FROM post WHERE writer ='$name'");
    $sentencia->execute();

    $res = $sentencia->fetchAll();

    

?>

<div class="p-4 d-flex mt-3 row justify-content-center ">
    <?php
        foreach($res as $fila){
    ?>

   
    <div class="col-md-3">

            <a style="text-decoration:none;color:white" href="articleUser.php?title=<?php echo $fila["title"] ?>">

                <h4 class="card card-header fst-italic bg-black"><?php echo $fila["title"] ?></h4>
                <p class="border bg-secondary p-2 text-white mb-0"><strong><?php echo $fila["type"] ?></strong></p>
                <!-- <p class="card card-footer"><?php echo $fila["writer"] ?></p> -->

                <!-- <blockquote class="blockquote-footer"></blockquote> -->

            </a>
    </div>

    <?php
        }
    ?>
</div>