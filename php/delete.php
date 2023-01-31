
<?php
    // include_once "../test/ProyectCrud/php/conection.php";


    $sentencia = self::$conn->prepare("DELETE FROM users WHERE nombre = '$name'");
    $sentencia->execute();

    if($sentencia->rowCount()==0){
        echo "<br>"."[No se borro el registro]";
    }else{
        echo "<br>"."[Se borro el registro]"."<br>"."Actualice...";
    }
    
?>