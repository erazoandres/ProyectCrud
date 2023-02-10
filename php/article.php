
<?php
    include_once "conection.php";
    include_once "header.php";

    $title = $_GET["title"];

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
  <header class="p-2 bg-dark text-white ">
       
</header>


<div class="d-flex container">

    <div class="col-8">

        <div class="px-4">

            <div class="text-white overflow-hidden me-auto">

                <h1 class="display-1 mb-0" style="font-family:Playfair Display, Georgia, Times New Roman, serif"><?php echo $title?></h1>
                <p class="text-muted"><?php echo $res->date ?> by <span style="text-decoration:underline;"><?php echo $res->writer ?></span></p>
                <p class="lead pt-4"><?php echo $res->content ?> </p>
            

            </div>

        </div> 
    </div> 

    <div class="col-4">
        <div class="card">
            <h3 class="card card-header">About something</h3>
            <p class="card card-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias doloremque tenetur quaerat animi magni aspernatur, libero nesciunt ab corporis consectetur?</p>
        </div>
    </div>

</div>
