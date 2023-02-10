<?php



    include_once "conection.php";
    session_start();

    $title = $_POST["title"];
    $type = $_POST["type"];
    $data = date('y-m-d');
    // $data = date('y-m-d' , strtotime($_POST["date"]));
    $content = $_POST["content"];
    $writer = $_SESSION["name"];


    $sentencia = $conn->prepare("INSERT INTO post(title,type,date,writer,content) VALUES('$title','$type' ,'$data','$writer', '$content')");
    $sentencia->execute();



    if(isset($sentencia)){
        header("Location:index.php");
    }


?>