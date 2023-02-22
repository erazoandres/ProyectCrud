<?php
include "securitySession.php";

include "conection.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    $sentencia = $conn->prepare("SELECT * FROM users WHERE nombre = '$name' AND email = '$email' AND pass = '$pass'");
    $sentencia->execute();
    
    $res = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    // $_SESSION["active"] = "active";
    
    if($sentencia->rowCount()>0){
        
        // session_name("loginUsuario"); 
        $_SESSION["name"] = "$name";        
        $_SESSION["cargo"]  = $res[0]["cargo"];
        $_SESSION["autentificado"]= "SI"; 
        $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 

        header("Location:index.php?status=welcome");        
    }else{
        
        header("Location: login.php?errorUsuario=1"); 
    }
?>