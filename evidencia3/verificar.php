<?php
// Obtener los valores de las casillas y la acción del formulario
$casilla1 = $_POST["casilla1"];
$casilla2 = $_POST["casilla2"];
$casilla3 = $_POST["casilla3"];
$casilla4 = $_POST["casilla4"];
$casilla5 = $_POST["casilla5"];
$accion = $_POST["accion"];

// Verificar qué acción se seleccionó
if ($accion == "comprar") {
  // Reemplazar "L" con "C" en las casillas seleccionadas
  if ($casilla1 == "L") {
    $casilla1 = "C";
  }
  if ($casilla2 == "L") {
    $casilla2 = "C";
  }
  if ($casilla3 == "L") {
    $casilla3 = "C";
  }
  if ($casilla4 == "L") {
    $casilla4 = "C";
  }
  if ($casilla5 == "L") {
    $casilla5 = "C";
  }
} elseif ($accion == "reservar") {
  // Reemplazar "L" con "R" en las casillas seleccionadas
  if ($casilla1 == "L") {
    $casilla1 = "R";
  }
  if ($casilla2 == "L") {
    $casilla2 = "R";
  }
  if ($casilla3 == "L") {
    $casilla3 = "R";
  }
  if ($casilla4 == "L") {
    $casilla4 = "R";
  }
  if ($casilla5 == "L") {
    $casilla5 = "R";
  }
}

// Actualizar los valores de las casillas en el código HTML
echo '<!DOCTYPE html>
<html>
  <head>
    <title>Interfaz de reserva de casillas</title>
  </head>
  <body>
    <h1>Reservar o comprar casillas</h1>
    <form action="verificar.php" method="post">
      <label>Casilla 1:</label>
      <input type="text" name="casilla1" value="' . $casilla1 . '"><br>
      <label>Casilla 2:</label>
      <input type="text" name="casilla2" value="' . $casilla2 . '"><br>
      <label>Casilla 3:</label>
      <input type="text" name="casilla3" value="' . $casilla3 . '"><br>
      <label>Casilla 4:</label>
      <input type="text" name="casilla4" value="' . $casilla4 . '"><br>
      <label>Casilla 5:</label>
      <input type="text" name="casilla5" value="' . $casilla5 . '"><br>
      <br>
      <label>Acción:</label>
      <select name="accion">
        <option value="comprar">Comprar</option>
        <option value="reservar">Reservar</option>
      </select>
      <br>
      <input type="submit" value="Enviar">
      </form>
    </body>
  </html>';
  ?>
