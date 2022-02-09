<?php



if(isset($_POST['btnenviar'])){

      session_start();

      $nombre = $_POST['nombre'];
      $password = $_POST['password'];

      require 'conexionbd/conexion.php';

      $sql = "SELECT id, nombre, password FROM EstudiosComple WHERE nombre = :nombre AND password = :password;";

      $consulta = $conn->prepare($sql);

      $consulta->bindParam(':nombre', $nombre);
      $consulta->bindParam(':password', $password);

      $consulta->execute();

      $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

      if($resultado > 0 ){

         $_SESSION['id_user'] = array('id'=> $resultado['id'], 'nombre' => $resultado['nombre']);
         header('location:datosUsuario.php');

         $conn = null;
         $consulta = null;

      }else{

         header('Location:index.html');

      }

 
    
}


?>