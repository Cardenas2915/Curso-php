// Obtener la ventana modal y el botón para abrirlo
var modal = document.getElementById("mi-modal");
var btnAbrir = document.getElementById("abrir-modal");

// Obtener el elemento <span> que cierra la ventana modal
var spanCerrar = document.getElementsByClassName("cerrar")[0];

// Cuando se hace clic en el botón, abrir la ventana modal
btnAbrir.onclick = function() {
  modal.style.display = "block";
}

// Cuando se hace clic en <span> (x), cerrar la ventana modal
spanCerrar.onclick = function() {
  modal.style.display = "none";
}

// Cuando el usuario hace clic en cualquier lugar fuera de la ventana modal, cerrarla
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}






