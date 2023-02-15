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

    if(isset($_POST["submit"])){
        echo "si post";
        if(is_uploaded_file($_FILES["file"]["tmp_name"])){  

            $ruta = "upload/";
            $nombre_final = trim($_FILES["file"]["name"]);
            $nombre_final = mb_ereg_replace(" ","",$nombre_final);
            $upload = $ruta.$nombre_final;
            
            $title = "hello";
            $image = $_FILES['file']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            $sentencia = $conn->prepare("INSERT INTO images(image,title) VALUES('$imgContent' , '$title')");
            $sentencia->execute();

        
        }

        $title = $_POST["title"];
        $type = $_SESSION["cargo"];
        $data = date('y-m-d');
        $content = $_POST["content"];
        $writer = $_SESSION["name"];

        $sentencia = $conn->prepare("INSERT INTO post(title,type,date,writer,content) VALUES('$title','$type' ,'$data','$writer', '$content')");
        $sentencia->execute();
    
        if(isset($sentencia)){
            header("Location:index.php");
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