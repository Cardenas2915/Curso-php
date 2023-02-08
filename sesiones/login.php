<?php

if(!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])){ //esto funcion hace la validacion desde el back para los caracteres y su maximo de dijitos

    echo "El usuario no coincide con el formato solicitado";
    exit;
}

if(!preg_match("/^[a-zA-Z0-9@.-]{3,30}$/",$_POST['clave'])){ //esto funcion hace la validacion desde el back para los caracteres y su maximo de dijitos

    echo "la clave no coincide con el formato solictado";
    exit;
}

if($_POST['usuario']=="Carlos" && $_POST['clave']=="1234" ){

    session_name("LOGIN");
    session_start();

    $_SESSION['nombre'] = "Carlos";
    $_SESSION['apellido'] = "cruz";
    $_SESSION['pais'] = "Colombia";

    

    if(headers_sent()){  //esta funcion es para ver si hay encabezados o enviados nos devuelve un valor booleano
        echo' 
        <script>
        window.location.href="contador.php";

        </script>';
    }else{
        header("location:contador.php"); //para usar esta funcion no debe imprimir nada en pantalla ni deben aver etiquetas html antes del header
    }

}else{
echo "datos incorrectos";
}
?>
