// Función para obtener los datos
let obtenerDatos = function () {
    let trabajador = document.getElementById("trabajador").value;
    let actividad = document.getElementById("actividad").value;
    let descripcion = document.getElementById("descripcion").value;
    let dias = document.getElementById("dias").value;

    // Si algunos de los inputs están vacíos el form no se envía
    if(trabajador == "" || actividad == "" || descripcion == "" || dias == "") {
        alert("Debe llenar todos los datos primero");
        return false; 
    // Si se cumplen todas las condiciones entonces se envía el formulario a PHP
    } else {
        return true;
    } 
}




