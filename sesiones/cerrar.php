<?php

    session_name("LOGIN");
    session_start();

    session_destroy();
if(headers_sent()){
    echo' 
    <script>
    alert("la sesion fue cerrada");
    window.location.href="index.php";
    
    </script>';
}else{
    header("location:index.php"); 
}

