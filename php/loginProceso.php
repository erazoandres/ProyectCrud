<?php

    include "conection.php";


    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];


    $sentencia = $conn->prepare("SELECT * FROM users WHERE nombre = '$name' AND email = '$email' AND pass = '$pass'");
    $sentencia->execute();

    if($sentencia->rowCount()>0){
        header("Location:../index.php?status=welcome");
    }else{
        echo "No estas registrado";
    }



?>