
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
        header('Location:../index.php?status=sucess');
    }elseif(count($array_users)==1){
        header('Location:../index.php?status=exist');
    }else{
        header('Location:../index.php?status=error');
    }


?>