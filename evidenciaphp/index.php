<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bulma.min.css">
    <title>Document</title>
</head>
<body>
    <h3 class="title is-3">Directorio telefonico</h3>
        <?php

                $datos = [
                    array("Juan Perez","Cra. 45 # 45 - 56","3456789","23/12/1997"),
                    array("Pablo Manrique","Clle. 23 # 12 - 19 Sur","3214567","12/10/1980"),
                    array("Nancy Peña","Av. 34 # 16 - 12","2135426","07/06/2000")
                ];
        ?>

<table class="table is-bordered">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Fecha de cumpleaños</th>

        </tr>
    </thead>

    <tbody>
        <tr>
        <td> <?php echo $datos[0][0]; ?> </td>
        <td> <?php echo $datos[0][1]; ?> </td>
        <td> <?php echo $datos[0][2]; ?> </td>
        <td> <?php echo $datos[0][3]; ?> </td>
        </tr>

        <tr>
        <td> <?php echo $datos[1][0]; ?> </td>
        <td> <?php echo $datos[1][1]; ?> </td>
        <td> <?php echo $datos[1][2]; ?> </td>
        <td> <?php echo $datos[1][3]; ?> </td>
        </tr>

        <tr>
        <td> <?php echo $datos[2][0]; ?> </td>
        <td> <?php echo $datos[2][1]; ?> </td>
        <td> <?php echo $datos[2][2]; ?> </td>
        <td> <?php echo $datos[2][3]; ?> </td>
        </tr>
    </tbody>
</table>
<br>
<br>

<?php
                $datos1 = [
                    array("Juan Perez  ","Pablo Manrique  ","3456789  ","Nancy Peña  "),
                    array("Cra. 45 # 45 - 56  ","Clle. 23 # 12 - 19 Sur  ","Av. 34 # 16 - 12  "),
                    array("3456789  ","3214567  ","2135426  "),
                    array("23/12/1997 ","12/10/1980 ","07/06/2000 ")
                ];

                foreach($datos1 as $nombre1=>$value){

                if ($value == 1){
                    echo $nombre1;
                }
                
                }



        


?>
</body>
</html>