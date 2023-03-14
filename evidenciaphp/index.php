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

<table class="table is-bordered">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Fecha de cumpleaños</th>
        <th>Color</th>
        <th>significado</th>
        </tr>
    </thead>
    <tbody>


<?php

//Nombre : Eduar Arvey Cardenas Cruz
//Desarrollo web con PHP
//Nombre de evidencia:Uso de arreglos
//se crearon dos arrays unos con los datos de las personas y otro con el significado de los colores, luego 
// utilizando el foreach imprimo los datos en pantalla con "echo" y llamando cada elemento del arreglo concateno codigo html para estructurar la tabla
// luego hago la verificacion si el nombre del color es igual a color de las personas imprima el significado del color y cambie la variable encontrado a verdadero
// si no es igual que verifique la varibale $encontrado e imprima el texto escrito.

$personas = array(
    array(
        'nombre' => 'Juan Perez',
        'direccion' => 'Cra. 45 # 45 - 56 ',
        'telefono' => '3456789',
        'fecha' => '23/12/1997',
        'color'=>'Rojo'
    ),
    array(
        'nombre' => 'Pablo Manrique',
        'direccion' => 'Clle. 23 # 12 - 19 Sur',
        'telefono' => '3214567',
        'fecha' => '12/10/1980',
        'color'=>'Verde'
    ),
    array(
        'nombre' => 'Nancy peña',
        'direccion' => 'Av. 34 # 16 - 12',
        'telefono' => '2135423',
        'fecha' => '07/06/2000',
        'color'=>'Amarillo'
    ),
    array(
        'nombre' => 'Eduar Cardenas',
        'direccion' => 'Manzana E lote 23',
        'telefono' => '3228173927',
        'fecha' => '15/09/1997',
        'color'=>'Azul'
        ),

);

$colores = array(
        array(
        'nombre' => 'Rojo',
        'significado' => 'Pasión, amor, energía'
        ),
        array(
        'nombre' => 'Verde',
        'significado' => 'Naturaleza, crecimiento, equilibrio'
        ),
        array(
        'nombre' => 'Amarillo',
        'significado' => 'Felicidad, creatividad, optimismo'
        )
    );

        foreach ($personas as $persona) {
        echo "<tr>";
        echo "<td>".$persona['nombre']."</td>";
        echo "<td>".$persona['direccion']."</td>";
        echo "<td>".$persona['telefono']."</td>";
        echo "<td>".$persona['fecha']."</td>";
        echo "<td>".$persona['color']."</td>";

        //Buscar el significado del color favorito en el arreglo de colores

        $encontrado = false;

        foreach ($colores as $color) {

            if ($persona['color'] == $color['nombre']) {
                echo "<td>".$color['significado']."</td>";
                $encontrado = true;
                break;
            }
            }
            if (!$encontrado) {
            echo "<td>No se encuentra el significado</td>";
            }
            echo "</tr>";
        }
?>

        
</tbody>
</table>
        



</body>
</html>