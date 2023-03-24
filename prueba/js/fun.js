// Obtener el campo de entrada de texto y el contenedor de resultados
var campoBusqueda = document.getElementById("texto-busqueda");
var contenedorResultados = document.getElementById("resultado-busqueda");


// Escuchar el evento "input" para realizar la búsqueda en tiempo real
    campoBusqueda.addEventListener("input", function() {
    // Obtener el texto de búsqueda y escapar caracteres especiales
    var busqueda = campoBusqueda.value.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");

    // Enviar la solicitud de búsqueda mediante AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        // Mostrar los resultados de la búsqueda en el contenedor
        contenedorResultados.innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "buscar.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("busqueda=" + busqueda);
    });

var resultadosSeleccionados = [];

// Agregar un evento de escucha para los checkboxes de la búsqueda
    contenedorResultados.addEventListener("click", function(evento) {
        // Verificar si se hizo clic en un checkbox de resultado de búsqueda
        if (evento.target && evento.target.nodeName === "INPUT" && evento.target.type === "checkbox") {
        // Verificar si el checkbox está seleccionado o no
        if (evento.target.checked) {
            // Agregar el valor del checkbox al arreglo de resultados seleccionados
            resultadosSeleccionados.push(evento.target.value);
        } else {
            // Remover el valor del checkbox del arreglo de resultados seleccionados
            resultadosSeleccionados.splice(resultadosSeleccionados.indexOf(evento.target.value), 1);
        }
        }
    });

    // Agregar un evento de escucha para el botón de guardar
    var guardarResultados = document.getElementById("guardarResultados");
    guardarResultados.addEventListener("click", function() {
    // Colocar los resultados de búsqueda seleccionados en el campo de entrada seleccionado
    resultadoSeleccionado.value = resultadosSeleccionados.join("- ");
    // Cerrar la ventana modal
    modal.style.display = "none";
    });





// // Agregar un evento de escucha para los resultados de la búsqueda
// contenedorResultados.addEventListener("click", function(evento) {
//     // Verificar si se hizo clic en un elemento de resultado de búsqueda
//     if (evento.target && evento.target.nodeName === "P") {
//       // Colocar el texto del elemento de resultado de búsqueda en el campo de entrada seleccionado
//       resultadoSeleccionado.value = evento.target.textContent;
//     }
//   });
  


