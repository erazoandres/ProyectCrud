<?php

    include_once "conection.php";
    session_start();
    $title = $_POST["title"];

    if(isset($_POST["submit"])){
       
        if(is_uploaded_file($_FILES["file"]["tmp_name"]) and is_uploaded_file($_FILES["adjunto"]["tmp_name"])){  

            #ARCHIVOS CARGADOS...
            if($_FILES["file"]["size"] > 20971520 or $_FILES["adjunto"]["size"]> 20971520){
                // echo "El tamaño es demasiado grande debe ser menor a 20 mb";
                header('Location:insert_post.php?status=errorSize');
                return;

            }else{

                #IMAGEN DEL ARTICULO
                $ruta = "upload/"; 
                $nombre_final = trim($_FILES["file"]["name"]); #LIMPIANDO NOMBRE DE ESPACIOS Y CARACTERES ESPECIALES
                $nombre_final = mb_ereg_replace(" ","",$nombre_final); #ELIMINANDO CADA ESPACIO (" ") DEL NOMBRE
                $upload = $ruta.$nombre_final; #PEGAMOS TODO ! :)
                $file_name_ext = explode(".",$upload); # EXTENCION DEL ARCHIVO
                $file_ext = strtolower(end($file_name_ext)); #MINUSCULA Y LE PASAMOS EL ULTIMO VALOR DEL ARRAY QUE DEVUELVE
                                                             #EXPLODE


                #ADJUNTO DEL ARTICULO
                $ruta = "upload/"; 
                $nombre_final_adjunto = trim($_FILES["adjunto"]["name"]); 
                $nombre_final_adjunto = mb_ereg_replace(" ","",$nombre_final_adjunto);
                $upload = $ruta.$nombre_final_adjunto; 
                $file_name_ext = explode(".",$upload); 
                $file_ext_adjunto = strtolower(end($file_name_ext)); 
                                                           

                #LO USARE PARA FIRMAR ESTOS 2 ARCHIVOS
                $writer = $_SESSION["name"];

                
                #EXTENCIONES PERMITIDAS
                $type_allowed_image = array('jpg', 'gif', 'png','webp');
                $type_allowed_adjunto = array('jpg', 'gif', 'png','webp','pdf','doc','rar','zip','xls','ppt','txt');
    
                if(in_array($file_ext , $type_allowed_image ) and in_array($file_ext_adjunto , $type_allowed_adjunto ) ){
    
                    $image = $_FILES['file']['tmp_name'];   
                    $imgContent = addslashes(file_get_contents($image));

                    $adjunto = $_FILES['file']['tmp_name'];   
                    $imgContent_adjunto = addslashes(file_get_contents($adjunto));
        
                    $sentencia_img = $conn->prepare("INSERT INTO files(file,type,title,postTitle,writer) VALUES('".$imgContent."','".$file_ext."' ,'$nombre_final','$title','$writer')");
                    $sentencia_img->execute();

                    $sentencia_adj = $conn->prepare("INSERT INTO attachment(file,writer,title_post,type) VALUES('".$imgContent_adjunto."','$writer','$title','".$file_ext_adjunto."')");
                    $sentencia_adj->execute();

                    $type = $_SESSION["cargo"];
                    $date = date('y-m-d');
                    $content = $_POST["content"];
                    $writer = $_SESSION["name"];
            
                    $sentencia_post = $conn->prepare("INSERT INTO post(title,type,date,writer,content) VALUES('$title','$type' ,'$date','$writer', '$content')");
                    $sentencia_post->execute();

                    if($sentencia_img->rowCount()>0 and $sentencia_adj->rowCount()>0 and $sentencia_post->rowCount()>0){
                        header('Location:insert_post.php?status=insertSuccess');
                        return;
                    }
        
                }else{
                    // echo "No puedes subir este archivo: <br> Revisa su extencion";
                    // echo "<br>Las extenciones permitidas son estas: " ;

                    header('Location:insert_post.php?status=extError');
                    return;
                }
            }
        }else{

            header('Location:insert_post.php?status=uploadError');
            return;
        }

    }else{return;}

    /*$check = getimagesize($_FILES["image"]["tmp_name"]);*/
?>