<?php

    include 'conection.php' ;

    $sentencia = $conn->prepare("SELECT * from files");
    $sentencia->execute();

    $res = $sentencia->fetchAll();

?>


<div>
    <div style="padding:2rem">
    <?php
        $i = 0;
        foreach($res as $row){


            $i = $i+1;

            
           

        ?>
            <img style="padding:2rem" width="300px" height="200px" src="data:image/<?php echo base64_encode($res[$i]["type"]) ?>;base64,<?php echo base64_encode($res[$i]["file"]) ?>" alt ="">
        
        <?php 
            }
        ?>
    </div>
</div>


