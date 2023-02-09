


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

    <body class="">

        <header class="container border-bottom d-flex">
            <div style="display:flex;align-items:center">
                <a href="index.php" style="font-size:1.5em;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                </a>
            </div>
            <div class="col-md-10 text-center p-4 mx-auto my-2 text-white ">
                <h2 class="mb-0">Title to create post</h2>
                <blockquote class="text-muted blockquote-footer d-inline-block">a short description</blockquote>
                <div class="d-flex justify-content-center">
    
                    <ul class=" d-flex flex-row d-block p-0" style="list-style:none;">
                    
                        <li> <a class="mx-3 text-white" style = "font-size:2em" href=""><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg></a>
                        </li>

                        <li> <a class="mx-3 text-danger" style = "font-size:2em;" href=""><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-balloon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z"/>
                            </svg></a>
                        </li>

                        <li> <a class="mx-3 text-info" style = "font-size:2em;"  href=""><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
                            </svg></a>
                        </li>

                    </ul>
    
                </div>
            </div>
        </header>

        <div class="container p-4 ">
            <div class="row">
                <div class="col bg-dark p-0">
                    <form action="insert_post_proccess.php" class="mx-0 text-center" method="POST">

                        <div>
                            <h2 class="text-center my-auto lead"><input type="text" maxlength="40" name = "title" style="width:100%;font-size:1.5em;outline:none" class="text-center p-4" max="10" placeholder="Ingresa titulo"></h2>
                            
                        </div>

                        <div style="height:100vh">
                            <textarea class="p-4 lead" name="content" id="" cols="30" rows="" placeholder="Escribe aqui tu contenido..." style="width:100%;height:100%;margin:0; padding:0;outline:none"></textarea>
                        </div>

                        <div>
                            <input type="date" name="date">
                        </div>

                        <div class="d-grid"><button type="submit" class=" btn btn-outline-primary p-3">Postear</button></div>
                    </form>
                </div>
                <div class="col-4  d-none d-md-block " style="height:100vh ; position:sticky;top:0; ">
                    <div class="my-3" >
                        <div class="card p-2">
                            <div class="card-header"><h5>Card title 1</h5></div>
                            <div class="card-body card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, fuga?</div>
                            <div class="card-footer text-secondary">Lorem, ipsum.</div>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="card p-2">
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
