<?php

    include 'conection.php' ;

    $sentencia = $conn->prepare("SELECT * from files");
    $sentencia->execute();

    $res = $sentencia->fetchAll();

?>


<div>
    <div>
    <?php
        $i = 0;
        foreach($res as $row){

            $i = $i+1;

        ?>
            <img width="300px" src="data:image/jpg;base64,<?php echo base64_encode($res[$i]["file"]) ?>" alt ="">
        
        <?php 
            }
        ?>
    </div>
</div>


