<?php session_start() ;?>


<!doctype html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../icons/font/bootstrap-icons.css">

        <style>
            a {
                /* background: red; */
                display:block;
                width: 1.5em;
                height: 60px;
                text-align: center;
                text-decoration:none;
                display: inline-flex;
                align-items: center;
                justify-content: center; 
            }
        </style>

    </head>

    <body class="bg-dark">

        <header class="container border-bottom d-flex">
            <div style="display:flex;align-items:center">
                <a  href="index.php" style="font-size:1.5em;color:red">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                </a>
            </div>
            <div class="col-md-10 text-center p-4 mx-auto my-2 text-white ">
                <h1 class="mb-1" style="font-family:Playfair Display, Georgia, Times New Roman, serif">Title to create post</h1>
                <blockquote class="text-muted blockquote-footer d-inline-block">a short description</blockquote>
                <div class="d-flex justify-content-center">
    
                    <ul class=" d-flex flex-row d-block p-0" style="list-style:none;">
                    
                        <li> <a class="mx-3 " style = "font-size:1.2em;color:brown" href=""><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg></a>
                        </li>

                        <li> <a class="mx-3 text-danger" style = "font-size:1.2em;" href=""><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-balloon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z"/>
                            </svg></a>
                        </li>

                        <li> <a class="mx-3 text-info" style = "font-size:1.2em;"  href=""><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
                            </svg></a>
                        </li>

                    </ul>
    
                </div>
            </div>
        </header>

        <div class="container">
            <nav class="nav d-flex">

                <div class="col-1 p-2">
                    <a class="nav-link px-2 " title = "Edita un articulo" style = "border-right:1px solid white ; height:100% ; width:100% " href="choose_edit_article.php?userPostSearch=<?php echo $_SESSION["name"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-credit-card-2-front" viewBox="0 0 16 16">
                        <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                        <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </a>
                </div>

                <div class="col-1 p-2">
                    <a class="nav-link px-2" title = "Elimina un articulo"  style = "border-right:1px solid white ; height:100% ;  width:100%; " href=""><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                    </a>
                </div>

                <div class="col-1 p-2">
                    <a class="nav-link px-2 border-right-sm-0" title = "?" style = "border-right:1px solid white  ; height:100% ; width:100%;  " href=""><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-question-diamond" viewBox="0 0 16 16">
                        <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                    </a>
                </div>

            </nav>
        </div>

        <div class="container p-4 ">
            <div class="row">
                <div class="col bg-dark p-0">
                    <form action="videoPlayer.php" class="mx-0 text-center" method="post" enctype="multipart/form-data">

                        <div>
                            <h2 class="text-center my-auto lead "><input type="text" maxlength="40" name = "title" style="width:100%;font-size:1.5em;outline:none" class="text-center p-4 bg-dark text-white" max="10" placeholder="Ingresa titulo" required></h2>
                            
                        </div>

                        <div style="height:100vh">
                            <textarea class="p-4 lead bg-dark text-white" name="content" id="" cols="30" rows="" placeholder="Escribe aqui tu contenido..." style="width:100%;height:100%;margin:0; padding:0;outline:none" required></textarea>
                        </div>

                        <input type="hidden" name="type" value="<?php echo $_SESSION["cargo"] ?>" >
                        
                        <div>
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                            </svg></a>

                            <input type="file" name="file" value="archivo" size="150" maxlength="150">
                        </div>                 

<!--  
                            INPUTS IMAGEN Y CATEGORIA
                            <div class="d-flex border-0">

                                <select class="p-2  bg-dark text-white" name="type" id="">
                                    <option class="text-primary" value="World">World</option>
                                    <option class="text-secondary" value="Design">Design</option>
                                    <option class="text-data" value="Culture">Culture</option>
                                    <option class="text-warning" value="Bussiness">Bussiness</option>
                                    <option class="text-info" value="Politics">Politics</option>
                                    <option class="text-danger" value="Opinion">Opinion</option>
                                    <option class="text-success" value="Technology">Technology</option>
                                    <option class="text-primary" value="Science">Science</option>
                                    <option class="text-muted" value="Health">Health</option>
                                    <option class="text-body" value="Style">Style</option>
                                    <option class="text-light" value="Travel">Travel</option>
                        
                                </select>

                                <input type="file" name="image"/>

                            </div> -->

                     
                        <div class="d-grid"><button name="submit" type="submit" value="UPLOAD" class=" btn btn-outline-primary p-3">Postear</button></div>
                    </form>
                </div>

                <div class="col-4 d-none d-md-block " style="height:100vh ; position:sticky;top:0; ">
                    <div class="my-3" >
                        <div class="card bg-warning text-dark p-2 ">
                            <div class="card-header"><h5>Card title 1</h5></div>
                            <div class="card-body card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, fuga?</div>
                            <div class="card-footer text-secondary">Lorem, ipsum.</div>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="card p-2 bg-dark text-light border">
                            <div class="card-header"><h5>Card title 2</h5></div>
                            <div class="card-body card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, fuga?</div>
                            <div class="card-footer text-secondary">Lorem, ipsum.</div>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="card p-2">
                            <div class="card-header"><h5>Card title 3</h5></div>
                            <div class="card-body card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, fuga?</div>
                            <div class="card-footer text-secondary">Lorem, ipsum.</div>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>
    </body>
</html>
