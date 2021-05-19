
let anadirCliente = function () {
    // Traemos los datos de los inputs
    cliente = document.getElementById("cliente").value;
    contraparte = document.getElementById("contraparte").value;
    telefono = document.getElementById("cliente-telefono").value;
    email = document.getElementById("cliente-email").value;
    expediente = document.getElementById("numero-expediente").value;
    casoTipo = document.getElementById("tipo-juicio").value;
    
    // Declaramos esta constante para validar el email
    const validacionCorreo = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    // Si alguno de los campos está vacío, aparecerá un mensaje diciendo que debe llenar todos los campos
    if(cliente == "" || contraparte == "" || telefono == "" || email == "" || expediente == "" || casoTipo == "") {
        alert("Debe llenar todos los campos");
        return false;
    // Se realiza la validación del correo electronico
    } else if (!validacionCorreo.test(email)) {
        alert("Debe contener un correo válido");
        return false;
    } else {
        return true;
    }
}