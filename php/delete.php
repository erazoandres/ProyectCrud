
<?php

    include_once "securitySession.php";
    include_once "conection.php";

    $user = $_GET["status"];
    
    $sentencia = $conn->prepare("DELETE FROM users WHERE nombre = '$user'");
    $sentencia2 = $conn->prepare("DELETE FROM post WHERE  writer = '$user'");
    $sentencia3 = $conn->prepare("DELETE FROM files WHERE writer = '$user'");
    $sentencia4 = $conn->prepare("DELETE FROM attachment WHERE writer = '$user'");

    $sentencia->execute();
    $sentencia2->execute();
    $sentencia3->execute();
    $sentencia4->execute();

    if($sentencia->rowCount()>0){
        // echo "<br>"."[No se borro el registro]";
        header('Location:users_admin.php?status=userDeleted');
    }else{
        // echo "<br>"."[Se borro el registro]"."<br>"."Actualice...";
        header('Location:users_admin.php?status=userDeletedError');
    }

?>