
<?php
    session_start();
    include_once 'conection.php';

    $id = $_POST["id"];
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $pass  = $_POST["pass"];
    $active = $_POST["active"];
    $cargo = $_POST["cargo"];
    
    $sentencia = $conn->prepare("UPDATE users SET nombre = '$name',cargo = '$cargo', email = '$email',pass = '$pass', active = '$active' WHERE nombre = '$id'");
    $sentencia->execute();  

    if($sentencia->rowCount()>0){
        header("Location:users_admin.php?status=edited");
    }else{
        header("Location:users_admin.php?status=editedError");
    }
?>