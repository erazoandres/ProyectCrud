<?php

    session_start();
    include_once "conection.php";

    $old_title = $_POST["old_title"];
    $new_title = $_POST["title"];
    $new_content = $_POST["content"];~
    $user_name =$_SESSION["name"];

    $sentencia = $conn->prepare("UPDATE post SET title = '$new_title' , content = '$new_content' WHERE title = '$old_title'");
    $sentencia->execute();

    $res = $sentencia->fetchAll();

  


    if($sentencia->rowCount()>0){
        header('Location:index.php?status=EditArtSuccess');
    }else{
        header('Location:index.php?status=EditArtError');
    }
?>

