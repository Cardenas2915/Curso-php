<?php

// echo $_FILES['fichero']['name']."<br>";
// echo $_FILES['fichero']['tmp_name']."<br>";
// echo $_FILES['fichero']['type']."<br>";
// echo $_FILES['fichero']['error']."<br>";
// echo $_FILES['fichero']['size']."<br>";


if(!file_exists("archivos")){
    if(!mkdir("archivos",0777)){
        echo "error al crear el directorio";
        exit();
    }
}

chmod("archivos",0777);

//si la funcion move_uploaded_file mueve correctamente el archivo devuleve verdadero
if(move_uploaded_file($_FILES['fichero']['tmp_name'],"archivos/".$_FILES['fichero']['name'])){
    echo "archivo subido con exito";
}else{
    echo "error al subir el archivo ";
}
