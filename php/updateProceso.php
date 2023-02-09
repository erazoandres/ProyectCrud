
<?php
    include_once 'conection.php';

    $id = $_POST["id"];
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $pass  = $_POST["pass"];

    $sentencia = $conn->prepare("UPDATE users SET nombre = '$name', email = '$email',pass = '$pass' WHERE nombre = '$id'");
    $sentencia->execute();  


    if($sentencia->rowCount()>0){
        header("Location:users_admin.php?status=edited");
    }else{
        header("Location:users_admin.php?status=editedError");
    }

    
?>