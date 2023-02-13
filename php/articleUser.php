<?php
    include_once "conection.php";
    include_once "header.php";

    $title  = $_GET["title"];
    $sentencia = $conn->prepare("SELECT * FROM post WHERE title = '$title'");
    $sentencia->execute();

    $res = $sentencia->fetch(PDO::FETCH_OBJ);
    echo $res->writer;
?>


<!doctype html>
<html lang="en">

<html class="bg-dark">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../icons/font/bootstrap-icons.css">
    </head>

    <body class="bg-dark">  
        <div class="d-flex container">

            <div class="col-8">

                <div class="px-4">

                    <div class="text-white overflow-hidden me-auto">

                        <div class="pb-3" style="font-family:Playfair Display, Georgia, Times New Roman, serif">
                            <strong><?php echo $res->type ?></strong>
                        </div>

                        <h1 class="display-1 mb-0" style="font-family:Playfair Display, Georgia, Times New Roman, serif"><?php echo $title?></h1>
                        <p class="text-muted "><?php echo $res->date ?> by <span style="text-decoration:underline;"><?php echo $res->writer ?></span></p>
                        <p class="lead pt-4 text-justify"><?php echo $res->content ?> </p>
                    

                    </div>

                </div> 
            </div> 

            <div class="col-4">
                <div class="p-4 text-white" style="position:sticky ; top:0">
                    <h3 class="card card-header border">About something</h3>
                    <p class="card card-body text-black" style="border-top-left-radius:0;border-top-right-radius:0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias doloremque tenetur quaerat animi magni aspernatur, libero nesciunt ab corporis consectetur?</p>
                </div>
            </div>

        </div>
    </body>

</html>




