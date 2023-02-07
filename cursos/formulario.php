<?php

// echo $_FILES['fichero']['name']."<br>";
// echo $_FILES['fichero']['tmp_name']."<br>";
// echo $_FILES['fichero']['type']."<br>";
// echo $_FILES['fichero']['error']."<br>";
// echo $_FILES['fichero']['size']."<br>";


//la funcion mine_content_type funcion nos devuele que tipo de archivo y haceos la comparacion para que solo acepte imagenes
if(mime_content_type($_FILES['fichero']['tmp_name'])!= "image/jpeg" && mime_content_type($_FILES['fichero']['tmp_name']) != "image/png"){
    echo "el tipo de fichero no es admitido";
    exit();
}


//esto es para limitar el peso del archivo
if(($_FILES['fichero']['size']/1024)>3072){
    
    echo "el archivo supera el peso permitido";
    exit();

}




//esto es para crear la carpeta si no existe
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
