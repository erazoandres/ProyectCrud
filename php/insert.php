
<?php

    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["pass"])){
        header('Location:../index.php?status=err');
        exit();
    }

    include_once "../php/conection.php";

    
    $name =  $_POST["name"];
    $email = $_POST["email"];
    $pass =  $_POST["pass"];
    
    $conn = new conection();
    $conn2 = $conn->get_conexion();
    $sentencia = $conn2->prepare("SELECT * FROM users WHERE nombre = '$name'");
    $sentencia->execute();
    $array_users = $sentencia->fetchAll();

    if(count($array_users) == 0){
        $sentencia2 = $conn2->prepare("INSERT INTO users(nombre,email,pass) VALUES('$name', '$email' , '$pass')");
        $sentencia2->execute();
    }else{
        echo "[nombre de usuario existente]"."<br>";
    }
?>