// Obtener elementos del DOM
var modal = document.getElementById("modal");
var openModalBtn = document.getElementById("openModal");
var closeModalBtn = document.getElementById("closeModal");

// Abrir la modal cuando se haga clic en el botón de abrir modal
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Cerrar la modal cuando se haga clic en el botón de cerrar modal
closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

// Cerrar la modal cuando se haga clic en cualquier parte fuera de la modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
