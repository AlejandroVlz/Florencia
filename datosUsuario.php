
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRA TUS DATOS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">


</head>
<body>


<?php
session_start();

?>

    <?php if(!empty($_SESSION['id_user']['id'])):  ?>


    <div id="header"> <h1>Usuario <?= $_SESSION['id_user']['nombre']?> </h1></div>

    <div>
        <input type="email" id="email" placeholder="REGISTRAR EMAIL">
            
            <input type="submit" value="GUARDAR" onclick="saludo();">   

            <br>

            <div id="cerrar_s"> <a href="cerrarsesion.php">CERRAR SESIÓN</a> </div>
            
            <div id ="mensaje_mostrar"></div>
    
    </div>
    
            




    <?php else: header('Location:index.html'); ?>

    <?php endif; ?>

    <script src='js/ajax.js'></script>
</body>
</html>