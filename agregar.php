<?php

session_start();

require 'conexionbd/conexion.php';


$email = $_POST['email'];


if(isset($_POST['btnenviar'])){

    if($email == ""){
        echo "los datos debes sen ingresados correctamente";
    }else{

        $id_usuario = $_SESSION['id_user']['id'];

        $sql = "UPDATE EstudiosComple SET email = :email WHERE id = '$id_usuario'";

        $consulta = $conn->prepare($sql);

        $consulta->bindParam(':email', $email, PDO::PARAM_STR);

        $consulta->execute();

        $conn = null;
        $consulta = null;

        echo "Los datos fueron regisrados correctamente";
   
    }

}



?>