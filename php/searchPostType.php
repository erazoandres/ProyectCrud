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

   
    <div class="col-md-3 ">
        <a class="" href="article.php?title=<?php echo $fila["title"] ?>" style="text-decoration:none">
            <h4 class="card card-header fst-italic bg-black text-white"><?php echo $fila["title"] ?></h4>
            <p class="p-3  mb-0 bg-secondary  text-white" style="line-clamp:2 ; -webkit-line-clamp:3 ; overflow:hidden ; display:-webkit-box;-webkit-box-orient:vertical"><?php echo $fila["content"] ?></p>
            <p class="card card-footer bg-dark text-white"><strong><?php echo $fila["type"] ?></strong></p>
        </a>
    </div>

    <?php
        }
    ?>
</div>