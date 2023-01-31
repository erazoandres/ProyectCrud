
<?php

    class conection{


        private static $conn; 

        function __construct(){

            try{
                if(!isset($conn)){
                    self::$conn = new PDO('mysql:host=localhost;dbname=bd','root','');
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                #    echo "[connected]"."<br>";
                } 
                else{
                #    echo "[cant connect database]"."<br>";
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        function get_conexion(){
            return self::$conn;
        }

        function get_data_users(){
            $sentencia = self::$conn->prepare("SELECT * FROM users");
            $sentencia->execute();
            $data = $sentencia->fetchAll();

            if(count($data) == 0){
                echo "vacio";
            }

            return $data;
        }

      
        function show_data($array){
            echo "<br>";
            foreach ($array as $fila){
                print($fila["nombre"]." ".$fila["email"]." ".$fila["pass"]."<br>");
            }
        }

        function close(){
            self::$conn = NULL;
            echo "<br>"."[closed]"."<br>" ;
        }
    }

?>