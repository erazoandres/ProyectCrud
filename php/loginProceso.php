<?php

    session_start();

    include "conection.php";
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sentencia = $conn->prepare("SELECT * FROM users WHERE nombre = '$name' AND email = '$email' AND pass = '$pass'");
    $sentencia->execute();

    $res = $sentencia->fetchAll();

    if($sentencia->rowCount()>0){
        $_SESSION["name"] = "$name";
        $_SESSION["active"] = "active";
        $_SESSION["cargo"]  = $res[0]["cargo"];

        
        header("Location:index.php?status=welcome");

        
    }else{
        echo "No estas registrado";
    }
?>