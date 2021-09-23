function recoverSubmit(){
    let pass = document.getElementById("password").value;
    let checkPass = document.getElementById("checkpassword").value;

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

    document.getElementById("recover_form").submit();
}

