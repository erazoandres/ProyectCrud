<?php
/*
    if(isset($_POST["submit"])){
    

        /*
         
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '*****';
        $dbName     = 'programacionnet';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
   
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
    */

?>

<?php

    include_once "conection.php";
    session_start();
    $title = $_POST["title"];

    if(isset($_POST["submit"])){
       
        if(is_uploaded_file($_FILES["file"]["tmp_name"])){  

            $ruta = "upload/";
            $nombre_final = trim($_FILES["file"]["name"]);
            $nombre_final = mb_ereg_replace(" ","",$nombre_final);
            $upload = $ruta.$nombre_final;

            $file_name_ext = explode(".",$upload);
            $file_ext = strtolower(end($file_name_ext));

            $type_allowed = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc' , 'mp4','pdf');

            if(in_array($file_ext , $type_allowed) ){

                $image = $_FILES['file']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));
    
                $sentencia = $conn->prepare("INSERT INTO files(file,title) VALUES('$imgContent' , '$title')");
                $sentencia->execute();
    
            }else{
                echo "No puedes subir este archivo: <br> Revisa su extencion";
                echo "<br>Las extenciones permitidas son estas: " ;
                foreach($type_allowed as $fila){
                    echo " ".$fila." ";
                }

            }
            
            $type = $_SESSION["cargo"];
            $data = date('y-m-d');
            $content = $_POST["content"];
            $writer = $_SESSION["name"];
    
            $sentencia = $conn->prepare("INSERT INTO post(title,type,date,writer,content) VALUES('$title','$type' ,'$data','$writer', '$content')");
            $sentencia->execute();
        
            if(isset($sentencia)){
                header('Location:insert_post.php');
            }
        }
    }

    //INSERCION DE IMAGEN DE ARTICULO
    /*$check = getimagesize($_FILES["image"]["tmp_name"]);

    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        //Insert image content into database
        $insert = $conn->prepare("INSERT into images (image, title) VALUES ('$imgContent', '$title')");
        $insert->execute();
        
    }
    */
?>