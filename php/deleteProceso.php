<?php

    include_once "conection.php";

    $title = $_POST["title"];
    $sentencia = $conn->prepare("DELETE FROM post WHERE title = '$title'");
  
    $sentencia->execute();

    if($sentencia->rowCount()>0){
        header('Location:users_admin.php?status=Postdeleted');
    }else{
        header('Location:users_admin.php?status=notFound');
    }
        
?>