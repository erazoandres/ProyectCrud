
<?php
    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["pass"])){
        header('Location:../index.php?status=err');
        exit();
    }

    include_once "../php/conection.php";

    $name =  $_POST["name"];
    $email = $_POST["email"];
    $pass =  $_POST["pass"];
    
    $sentencia = $conn->prepare("SELECT * FROM users WHERE nombre = '$name'");
    $sentencia->execute();
    $array_users = $sentencia->fetchAll();

    if(count($array_users) == 0){
        $sentencia2 = $conn->prepare("INSERT INTO users(nombre,email,pass) VALUES('$name', '$email' , '$pass')");
        $sentencia2->execute();
        header('Location:users_admin.php?status=sucess');
    }elseif(count($array_users)==1){
        header('Location:users_admin.php?status=exist');
    }else{
        header('Location:users_admin.php?status=error');
    }


?>