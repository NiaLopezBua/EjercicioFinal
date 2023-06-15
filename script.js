function validarFormulario() {
    var nombre = document.getElementsByName('nombre')[0].value;
    var primerApellido = document.getElementsByName('primerApellido')[0].value;
    var segundoApellido = document.getElementsByName('segundoApellido')[0].value;
    var email = document.getElementsByName('email')[0].value;
    var login = document.getElementsByName('login')[0].value;
    var password = document.getElementsByName('password')[0].value;

    // Para validar los campos obligatorios
    if (nombre === "" || primerApellido === "" || segundoApellido === "" || email === "" || login === "" || password === "") {
        alert("Todos los campos son obligatorios. Por favor, completa todos los campos.");
        return false;
    }

    // Para validar el formato de correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("El formato del correo electrónico no es válido. Por favor, introduce un correo electrónico válido.");
        return false;
    }

    // Validar longitud de la contraseña
    if (password.length < 4 || password.length > 8) {
        alert("La longitud de la contraseña debe estar entre 4 y 8 caracteres.");
        return false;
    }

    // Si todas las validaciones son correctas, se puede enviar el formulario
    return true;
}


var enviarBtn = document.querySelector('input[name="enviar"]');
enviarBtn.addEventListener('click', validarFormulario);
