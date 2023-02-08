<?php
    session_name("LOGIN");//MODIFICAR EL NOMBRE DE LA SESSION EN LA COOKIES 
    //session_id("php"); modificar el valor de la sesion en la cookies
    session_start();

    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{
    $_SESSION['contador'] = 1;
    }

    //La función isset() , según el manual PHP, determina si una variable ha sido declarada y su valor no es NULO.
    //Es importante fijarse bien: si una variable tiene valor nulo, aunque haya sido declarada, isset() devolverá false
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <?php echo "hola ". $_SESSION['nombre']. " todo bien" ?>
    
    <br>
    <br>
    <a href="cerrar.php">Eliminar Sesion</a> 

</body>
</html>