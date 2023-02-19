<?php
    session_start();

    include "header.php";
    include "footer.php";
    include "conection.php";

    $cargo = $_SESSION["cargo"];
    $name = $_SESSION["name"];

    $sentencia = $conn->prepare("SELECT * FROM post WHERE type = '$cargo'  ORDER BY id DESC");
    $sentencia->execute();

    // $sentencia2 = $conn->prepare("SELECT * from files");
    $sentencia2 = $conn->prepare("SELECT * from files WHERE writer = '$name' ORDER BY id DESC");
    $sentencia2->execute();

    
    $articulos = $sentencia->fetchAll();
    $imagenes = $sentencia2->fetchAll();
    
    if($sentencia2->rowCount()>0 ){
        echo "yes";
    }else{
        echo "no";
    }

    ?>

<main class="py-3" >

    <!-- HEADER CATEGORIAS -->
    <div class="container mt-2">
        <div class=" col-12 bg-secondary">
            <ul class="nav d-flex justify-content-around py-3 my-3">
                
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=World">World</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Technology">Technology</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Design">Design</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Culture">Culture</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Bussiness">Business</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Politics">Politics</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Opinion">Opinion</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Science">Science</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Health">Health</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Style">Style</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Travel">Travel</a></li>
            </ul>
        </div>

    </div>

    <!-- TARGETA SLIDER -->
    <div class="container ">    
        <div class="p-4 p-md-5 bg-secondary rounded">
    
            <div class="col-md-6 text-white px-0">
                <h1 class="fst-italic display-5" style="font-family:Playfair Display, Georgia, Times New Roman, serif"><a href=""></a> Title of a longer featured blog post</h1>
                <p class="lead my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit illo dicta mollitia ducimus, obcaecati ullam? dolor sit amet consectet</p>
                <a class="lead fw-bold text-white mb-0" href="">Reading...</a>
            </div>
    
        </div>
    </div>

    <!-- TARGETAS DESTACADAS -->
    <div class="container">
        <div class="row">

            <div class="d-flex flex-wrap my-4"> 

                <!-- TARGETA 1 -->
                <div class="col bg-secondary p-5 text-center mx-3 d-lg-block d-none">
                    
                    <a class="d-block " href="" style="color:gold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </a>
                    <h2 class="text-white pt-2 pb-md-3 pb-2"> <strong> Lorem, ipsum dolor.</strong></h2>

                    <div class="lead d-none d-md-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, possimus. Doloremque suscipit sit a facere. Repellat tempore ut et ipsa, ducimus laudantium sapiente laboriosam cumque, perspiciatis ab illo explicabo provident?</div>
                    <a class="text-white p-2 mt-4 d-block" href="#">Lorem, ipsum dolor...</a>
                </div>

                <!-- TARGETA 2 -->
                <div class="col bg-secondary p-5 text-center mx-3 d-lg-block d-none">
                    
                    <a class="d-block " href="" style="color:gold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </a>
                    <h2 class="text-white pt-2 pb-md-3 pb-2"> <strong> Lorem, ipsum dolor.</strong></h2>
                    <div class="lead d-md-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, possimus. Doloremque suscipit sit a facere. Repellat tempore ut et ipsa, ducimus laudantium sapiente laboriosam cumque, perspiciatis ab illo explicabo provident?</div>
                    <a class="text-white d-block p-2 mt-4" href="#">Lorem, ipsum dolor...</a>
                </div>

            </div>
        </div>
    </div>

    <!-- TARGETAS ARTICULOS RESUMEN -->
    
    <div class="container">
        <div class="row mb-2">
            <?php 
            $i=0;
            foreach($articulos as $fila){ ?>
            
            
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-3 text-success"><?php echo $fila['type'] ?></strong>
                            <h2 style="color:white;font-family:Playfair Display, Georgia, Times New Roman, serif" class="mb-0"><?php echo $fila["title"] ?></h2>
                            <div class="mb-1 text-muted"><?php echo $fila["date"] ?></div>
                                <p class="lead card-text mb-auto lead text-white d-none d-lg-block" style="line-clamp:2 ; -webkit-line-clamp:2 ; overflow:hidden ; display:-webkit-box;-webkit-box-orient:vertical;font-family:system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji", Segoe UI Symbol, Noto Color Emoji" ><?php echo $fila["content"] ?></p>
                                <!-- <blockquote class="blockquote-footer">by <?php echo $fila["writer"] ?></blockquote> -->
                            <a href="articleUser.php?title=<?php  echo $fila["title"]?>" class="stretched-link">Continue reading...</a>
                        </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="" width="300px" height="100%" src="data:image/<?php echo base64_encode($imagenes[$i]["type"]) ?>;base64,<?php echo base64_encode($imagenes[$i]["file"]) ?>" alt ="">
                    </div>
                </div>
        </div>  
            <?php $i = $i +1 ; } ?>
  
        </div>
    </div>
    
</main>


