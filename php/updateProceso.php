
<?php
    include_once '../php/conection.php';

    $id = $_POST["id"];
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $pass  = $_POST["pass"];

    $sentencia = $conn->prepare("UPDATE users SET nombre = '$name', email = '$email',pass = '$pass' WHERE nombre = '$id'");
    $sentencia->execute();  


    if($sentencia->rowCount()>0){
        header("Location:../index.php?status=edited");
    }else{
        header("Location:../index.php?status=editedError");
    }

    
?>