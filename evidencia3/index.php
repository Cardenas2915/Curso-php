<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Operaciones Aritmeticas </h1>

<br>

<form method="POST" action="" autocomplete="off">
    <label for="num1">Número 1:</label>
    <input type="text" id="num1" name="valor1" >

    <label for="num2">Número 2:</label>
    <input type="text" id="num2" name="valor2">

    <label for="operacion">Operación:</label>
    <select id="operacion" name="operacion">
    <option value="suma">suma</option>
    <option value="resta">resta</option>
    <option value="multiplicacion">multiplicacion</option>
    <option value="division">division</option>
    </select>

    <button type="submit">Calcular</button>
</form>

<br>



<?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $valor1 = is_numeric($valor1) ? $valor1 : 0;
    $valor2 = is_numeric($valor2) ? $valor2 : 0;

    $operacion = $_POST['operacion'];

function operaciones($valor1,$valor2,$operacion){
    
    if ($operacion == "suma") {

        $resultado = $valor1 + $valor2;

        } elseif ($operacion == "resta") {

        $resultado = $valor1 - $valor2;

        } elseif ($operacion == "multiplicacion") {

        $resultado = $valor1 * $valor2;

        } elseif ($operacion == "division") {

        $resultado = $valor1 / $valor2;

        } else {

        return "Operación inválida";

        }

        return $resultado;
    }



$resultado = operaciones($valor1, $valor2,$operacion);
echo "<h2>El resultado de la operacion es : " . $resultado . "</h2><br>";

?>

</body>
</html>

