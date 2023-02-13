
<?php

    include_once "conection.php";

    $user = $_GET["status"];
    
    $sentencia = $conn->prepare("DELETE FROM users WHERE nombre = '$user'");
    $sentencia->execute();

    if($sentencia->rowCount()==0){
        // echo "<br>"."[No se borro el registro]";
    }else{
        // echo "<br>"."[Se borro el registro]"."<br>"."Actualice...";
    }
    

    #HAY QUE CORREGIR ESTA PARTE PARA QUE DEVUELTA EL STATUS Y HAGA LA COMPROBACION DE LA EJECUCION DE LA SENTENCIA
    header('Location:users_admin.php?status=del')
    
?>