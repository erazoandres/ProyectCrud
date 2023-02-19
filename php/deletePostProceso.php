<?php

    include_once "conection.php";

    if($_POST["submit"]){

        $title = $_POST["title"];
        $sentencia = $conn->prepare("DELETE FROM post WHERE title = '$title'");
        $sentencia2 = $conn->prepare("DELETE FROM files WHERE title = '$title'");
        $sentencia3 = $conn->prepare("DELETE FROM attachment WHERE title = '$title'");
      
        $sentencia->execute();
        $sentencia2->execute();
        $sentencia3->execute();
    
        if($sentencia->rowCount()>0 and $sentencia2->rowCount()>0 and $sentencia3->rowCount()>0 ){
            header('Location:users_admin.php?status=delSuccess');
        }else{
            header('Location:users_admin.php?status=delError');
        }
    }
?>