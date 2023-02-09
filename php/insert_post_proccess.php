<?php

    include_once "conection.php";

    $title = $_POST["title"];
    $data = date('y-m-d' , strtotime($_POST["date"]));
    $content = $_POST["content"];


    $sentencia = $conn->prepare("INSERT INTO post(title,date,content) VALUES('$title' ,'$data', '$content')");
    $sentencia->execute();

    if(isset($sentencia)){
        header("Location:index.php");
    }

?>