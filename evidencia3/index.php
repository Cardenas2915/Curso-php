<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="bulma.min.css">
    <title>Document</title>
</head>
<body>


<h1>TEATRO</h1>
<h1>Seleccione un asiento en el teatro</h1>

    <table class="table">
        <thead>
            <tr>
            <th>puesto1</th>
            <th>puesto2</th>
            <th>puesto3</th>
            <th>puesto4</th>
            <th>puesto5</th>
            </tr>
        </thead>
        <tbody>
<?php

error_reporting(0);

$puestos = array  (
    array('vendido'=>'V'),
    array('Rerservado'=>'R'),
    array('liberada'=>'L')
);


        foreach ($puestos as $puesto){
            echo  "<tr>";
            echo  '<td>'.$puesto['liberada'].'</td>';
            echo  '<td>'.$puesto['liberada'].'</td>';
            echo  '<td>'.$puesto['liberada'].'</td>';
            echo  '<td>'.$puesto['liberada'].'</td>';
            echo  '<td>'.$puesto['liberada'].'</td>';
            echo  "</tr>";


        }
            $fila = $_POST['fila'];
            $asiento = $_POST['asiento'];
            $accion = $_POST['accion'];
            $pocision = $fila . $asiento;
        ?>
        
    </tbody>
    </table>
    <br>

    <?php

    ?>
	<form action="verificar.php" method="POST">

		<label for="fila">Fila:</label>
		<input type="text" id="fila" name="fila"><br><br>
		
		<label for="asiento">Asiento:</label>
		<input type="text" id="asiento" name="asiento"><br><br>
		
		<label>Seleccione una opción:</label><br>
		<input type="radio" id="reservar" name="accion" value="reservar">
		<label for="reservar">Reservar</label><br>
		
		<input type="radio" id="comprar" name="accion" value="comprar">
		<label for="comprar">Comprar</label><br>
		
		<input type="radio" id="liberar" name="accion" value="liberar">
		<label for="liberar">Liberar</label><br><br>
		
		<input type="submit" value="Enviar">
	</form>
</body>
</html>

</body>
</html>

