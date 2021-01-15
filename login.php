<?php
$usuari= $_POST['usser'];
$contrasena = $_POST['passw'];

if($usuari === '' || $contrasena === ''){

    echo  json_encode('error');
}else{
    include "conexion.php";
    $link=connect();
    //echo  json_encode('Correcto: <br>Usuario:'.$usuario.'<br>Pass:'.$contrasena);     
    $consu = "SELECT * FROM adminman WHERE nameman = '$usuari' AND passwman='$contrasena'";
    $registros = mysqli_query($link,$consu);

    $count = mysqli_num_rows($registros);
    //echo $count;

    if ($count == 1) {

        echo json_encode('exito');
    }else{    

        echo json_encode('fallo');
       
        }
}    



