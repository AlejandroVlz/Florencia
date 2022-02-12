<?php

$usuario = "sa";
$contraseña = "alex1928";
$nombreBaseDeDatos = "florencia";
$rutaServidor = "192.168.1.70";


try {
    $conn = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos:" . $e->getMessage();
}

        
?>