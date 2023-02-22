<?php

    $url = "https://www.youtube.com/watch?v=ucAqnICS2FU&ab_channel=Willyamet";

    $exp = explode("=","$url");

    $code = strval($exp[1]);

    $exp2 = explode("&","$code");
    $codef = strval($exp2[0]);

    

    print($codef);



?>