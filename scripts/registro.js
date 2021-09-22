function submitForm(){
    let name = document.getElementById("name").value;
    let surname = document.getElementById("surname").value;
    let email = document.getElementById("email").value;
    let dni = document.getElementById("dni").value;
    let pass = document.getElementById("password").value;
    let checkPass = document.getElementById("checkpassword").value;
    let toe = document.getElementById("toe").checked;

    if (name.length <= 0){
        document.getElementById("submit_alert").innerHTML = "Ingrese su nombre.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }else if(/[\d]|[\W]/g.test(name)){
        document.getElementById("submit_alert").innerHTML = "El nombre solo puede contener letras.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }

    if (surname.length <= 0){
        document.getElementById("submit_alert").innerHTML = "Ingrese su apellido.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }else if(/[\d]|[\W]/g.test(surname)){
        document.getElementById("submit_alert").innerHTML = "El apellido solo puede contener letras.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }

    if (email.length <= 0){
        document.getElementById("submit_alert").innerHTML = "Ingrese su correo electrónico.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }else if(/\w@\w+\w*\.[a-z\.]+$/g.test(email) == false){
        document.getElementById("submit_alert").innerHTML = "El correo electrónico no es válido.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }

    if (dni.length <= 0){
        document.getElementById("submit_alert").innerHTML = "Ingrese su DNI.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }else if((dni.length < 8) || (dni.length > 8)){
        document.getElementById("submit_alert").innerHTML = "Ingresa un DNI válido.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }

    if(pass.length < 6){
        document.getElementById("submit_alert").innerHTML = "La contraseña debe tener un mínimo de 6 caracteres.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }

    if(pass != checkPass){
        document.getElementById("submit_alert").innerHTML = "Las contraseñas no coinciden.";
        document.getElementById("submit_alert").style.display = "inline";
        return;
    }

    if(toe == false){
        document.getElementById("submit_alert").innerHTML = "Debes aceptar los terminos y condiciones.";
        return;
    }

    document.getElementById("register_form").submit();
}