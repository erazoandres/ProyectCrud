<?php

    include 'conection.php' ;

    $sentencia = $conn->prepare("SELECT * from files");
    $sentencia->execute();

    $res = $sentencia->fetchAll();

?>


<img width=300px src="data:image/png;base64,<?php echo base64_encode($res[2]["file"]) ?>" alt ="">