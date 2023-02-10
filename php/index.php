<?php

    session_start();


    include "header.php";
    include "footer.php";
    include "conection.php";

    $sentencia = $conn->prepare("SELECT * FROM post");
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();
    

    ?>


<main class="py-3">

    <div class="container mt-2">
        <div class=" col-12 bg-secondary">
            <ul class="nav d-flex justify-content-around py-3 my-3">
                


                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=World">World</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Technology">Technology</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Design">Design</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Culture">Culture</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Business">Business</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Politics">Politics</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Opinion">Opinion</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Science">Science</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Health">Health</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Style">Style</a></li>
                <li><a class="nav-link text-decoration-underline text-white" style="font-size:1.2em" href="searchPostType.php?type=Travel">Travel</a></li>
            </ul>
        </div>

    </div>
    
    <div class="container ">    
        <div class="p-4 p-md-5 bg-secondary rounded">
    
            <div class="col-md-6 text-white px-0">
                <h1 class="fst-italic display-5" style="font-family:Playfair Display, Georgia, Times New Roman, serif"><a href=""></a> Title of a longer featured blog post</h1>
                <p class="lead my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit illo dicta mollitia ducimus, obcaecati ullam? dolor sit amet consectet</p>
                <a class="lead fw-bold text-white mb-0" href="">Reading...</a>
            </div>
    
        </div>
    </div>

    <div class="container">
        <div class="">
            <div class="d-flex flex-wrap my-4">
                <div class="col bg-secondary p-5 text-center mx-3">
                    
                    <a class="d-block " href="" style="color:gold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </a>
                    <h2 class="text-white pt-2 pb-md-3 pb-2"> <strong> Lorem, ipsum dolor.</strong></h2>
                    <!-- <p class="blockquote-footer">Lorem, ipsum.</p> -->
                    <div class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, possimus. Doloremque suscipit sit a facere. Repellat tempore ut et ipsa, ducimus laudantium sapiente laboriosam cumque, perspiciatis ab illo explicabo provident?</div>
                    <a class="text-white p-2 mt-4 d-block" href="#">Lorem, ipsum dolor...</a>
                </div>

                <div class="col bg-secondary p-5 text-center mx-3">
                    
                    <a class="d-block " href="" style="color:gold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </a>
                    <h2 class="text-white pt-2 pb-md-3 pb-2"> <strong> Lorem, ipsum dolor.</strong></h2>
                    <!-- <p class="blockquote-footer">Lorem, ipsum #2</p> -->
                    <div class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, possimus. Doloremque suscipit sit a facere. Repellat tempore ut et ipsa, ducimus laudantium sapiente laboriosam cumque, perspiciatis ab illo explicabo provident?</div>
                    <a class="text-white d-block p-2 mt-4" href="#">Lorem, ipsum dolor...</a>
                </div>

                <!-- <div class="col-6 bg-secondary px-5 py-4  text-center mx-2 mb-2">
                    
                    <h2 class="text-white pt-2 pb-md-3 pb-2 "> <strong> Lorem, ipsum dolor.</strong></h2>
                    <p class="blockquote-footer">Lorem, ipsum #3.</p>
                    <div class="intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, possimus. Doloremque suscipit sit a facere. Repellat tempore ut et ipsa, ducimus laudantium sapiente laboriosam cumque, perspiciatis ab illo explicabo provident?</div>
                    <a class="text-white" href="#" class="text-info">Lorem, ipsum dolor...</a>
                    <a class="d-block pt-4" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                    </a>
                </div> -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-2">
            <?php foreach($resultado as $fila){ ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-3 text-success"><?php echo $fila['type'] ?></strong>
                        <h2 style="color:white;font-family:Playfair Display, Georgia, Times New Roman, serif" class="mb-0"><?php echo $fila["title"] ?></h2>
                        <div class="mb-1 text-muted"><?php echo $fila["date"] ?></div>
                            <p class="lead card-text mb-auto lead text-white" style="line-clamp:2 ; -webkit-line-clamp:2 ; overflow:hidden ; display:-webkit-box;-webkit-box-orient:vertical;font-family:system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji", Segoe UI Symbol, Noto Color Emoji" ><?php echo $fila["content"] ?></p>
                            <!-- <blockquote class="blockquote-footer">by <?php echo $fila["writer"] ?></blockquote> -->
                        <a href="#" class="stretched-link">Continue reading...</a>
                        </div>
                    <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c" style="--darkreader-inline-fill: #404447;" data-darkreader-inline-fill=""></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" style="--darkreader-inline-fill: #d2cfcb;" data-darkreader-inline-fill="">Thumbnail</text></svg>

                    </div>
                </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
</main>