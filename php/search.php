<?php
    include_once "header.php";
    include_once "footer.php";
    include_once "conection.php";

    if(isset($name)){
            
        $name_get = $_GET["userPostSearch"];

    }else{
        $name = $_POST["userPostSearch"];
        $sentencia = $conn->prepare("SELECT * FROM post WHERE writer ='$name' or writer = '$name_get'");
        $sentencia->execute();
        $res = $sentencia->fetchAll();
    }


?>

<div class="p-4 d-flex mt-3 row justify-content-center ">
        <div class="p-4 mb-3">
            <h2 style="font-family:Playfair Display, Georgia, Times New Roman, serif" class="text-light">Mira!, esto es lo que encontre:</h2>
        </div>  
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

