
<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "proyectopai");

// Obtener el texto de búsqueda desde el formulario
$busqueda = $_POST["busqueda"];

// Realizar la consulta a la base de datos
$sql = "SELECT * FROM ambiente WHERE ambiente_nombre LIKE '%$busqueda%'";
$resultado = mysqli_query($conexion, $sql);

// Mostrar los resultados de la búsqueda
if (mysqli_num_rows($resultado) > 0) {
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo "<input type='checkbox' value='".$fila['ambiente_nombre']."'>". $fila["ambiente_nombre"] ."</input>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>