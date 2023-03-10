<?php
    include_once "securitySession.php";
    include_once "conection.php";
    include_once "header.php";

    $title = $_GET["title"];

    $sentencia = $conn->prepare("SELECT * FROM post WHERE title = '$title'");
    $sentencia->execute();

    $res = $sentencia->fetch(PDO::FETCH_OBJ);

  
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

    <body>
        <div class="d-flex container mx-sm-0">

            <div class="col-lg-8 py-4">

                <div class="px-4">

                    <div class="text-white overflow-hidden me-auto">

                        <div class="py-3 mt-3" style="font-family:Playfair Display, Georgia, Times New Roman, serif">
                            <strong><?php echo $res->type ?></strong>
                        </div>

                        <h1 class="display-1 mb-0" style="font-family:Playfair Display, Georgia, Times New Roman, serif"><?php echo $title?></h1>
                        <p class="text-muted"><?php echo $res->date ?> by <span style="text-decoration:underline;"><?php echo $res->writer ?></span></p>
                        <p class="lead pt-4 text-justify"><?php echo $res->content ?> </p>
                    

                    </div>


                    <!-- API DE YOUTUBE -->
                    <div> 
              
                        <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
                        <div id="player"></div>

                        <script>
                            // 2. This code loads the IFrame Player API code asynchronously.
                            var tag = document.createElement('script');

                            tag.src = "https://www.youtube.com/iframe_api";
                            var firstScriptTag = document.getElementsByTagName('script')[0];
                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                            
                            
                            var url = '<?php echo $res->urlVideo ?>';

                            // 3. This function creates an <iframe> (and YouTube player)
                            //    after the API code downloads.
                            var player;
                            function onYouTubeIframeAPIReady() {
                            player = new YT.Player('player', {
                                height: '360',
                                width: '640',
                                videoId: url,
                                events: {
                                'onReady': onPlayerReady,
                                'onStateChange': onPlayerStateChange
                                }
                            });
                            }

                            // 4. The API will call this function when the video player is ready.
                            function onPlayerReady(event) {
                            event.target.playVideo();
                            }

                            // 5. The API calls this function when the player's state changes.
                            //    The function indicates that when playing a video (state=1),
                            //    the player should play for six seconds and then stop.
                            var done = false;
                            function onPlayerStateChange(event) {
                            if (event.data == YT.PlayerState.PLAYING && !done) {
                                setTimeout(stopVideo, 6000);
                                done = true;
                            }
                            }
                            function stopVideo() {
                            player.stopVideo();
                            }
                        </script>

                    </div>

                    <div class="d-flex py-2">

                        <!-- ICONO LIKE -->
                        <div class="">
                            <button type="button" class="btn btn-outline-primary  d-flex justify-content-center align-items-center align-content-center">LIKE &nbsp <svg class="" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                </svg>
                            </button>
                        </div>

                        <!-- ICONO COMENTAR -->
    
                        <div class="mx-4">
                            <button type="button" class="btn btn-outline-info d-flex justify-content-center align-items-center align-content-center">COMENTAR &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </button>
                        </div>

                    </div>
                    
                </div>

            </div> 

            <div class="col-4 d-none d-lg-block">
                <div class=" p-4" style = "position:sticky;top:0;"  >

                    <div>
                        <h3 class="card card-header bg-dark text-white border">About something</h3>
                        <p class="card card-body mb-0" style="border-top-left-radius:0;border-top-right-radius:0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias doloremque tenetur quaerat animi magni aspernatur, libero nesciunt ab corporis consectetur?</p>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>