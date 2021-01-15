<?php
    
        $servidor = "localhost";
        $usuario  = "root";
        $clave    = "";
        $base     = "notificaciones_upiiz";
    
        $conexion = new mysqli($servidor, $usuario, $clave, $base);

        if ($conexion->connect_errno) {
            echo "Error: No se pudo conectar a MySQL."; // IMPRIME MENSAJE DE ERROR PERSONALIZADO  Y SE TERMINA LA LÍNEA            
        }

      
    function connect()
    {
        $servidor = "localhost";
        $usuario  = "root";
        $clave    = "";
        $base     = "notificaciones_upiiz";
    
        $conexion = mysqli_connect($servidor, $usuario, $clave, $base);

        if (!$conexion) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL; // IMPRIME MENSAJE DE ERROR PERSONALIZADO  Y SE TERMINA LA LÍNEA
            echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;// IDENTIFICA EL ERROR CON CÓDIGO O NOMBRE
            exit;
        }
    
        return $conexion;
    }
    
?>