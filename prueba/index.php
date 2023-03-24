<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Botón para abrir la ventana modal -->
<button id="abrir-modal">Buscar Ambientes</button>

<!-- Ventana modal -->
<div id="mi-modal" class="modal">
    <div class="modal-contenido">
    <span class="cerrar">&times;</span>
    <h2>Buscar Ambientes</h2>
    <form action="">
    <input type="text" id="texto-busqueda" placeholder="Ingresa tu búsqueda aquí">
    <div id="resultado-busqueda"></div>
    <button type="button" id="guardarResultados">Guardar</button>
    </div>
</div>
</form>
<br>
<input type="text" id="resultadoSeleccionado" name="resultadoSeleccionado" readonly>



<script src="js/modal.js"></script>
<script src="js/fun.js"></script>
</body>
</html>