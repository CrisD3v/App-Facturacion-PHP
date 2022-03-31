<?php
    include_once "../../Controlador/Conexion/conection.php";
    $sentencia = $bd -> query("select * from users");
    $usuario = $sentencia ->fetchAll(PDO::FETCH_OBJ);
    //print_r($cliente);
?>