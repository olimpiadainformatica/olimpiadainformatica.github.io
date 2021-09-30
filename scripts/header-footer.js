// HEADER

let header = document.getElementsByTagName("header")[0];

let navbar = document.createElement("navbar");

let newElement = document.createElement('a');
newElement.id = "header_organization_name";
newElement.href = "index.html";
newElement.innerHTML = "MEDHEALTH";

let newElementInner = document.createElement('img');
newElementInner.src = "src/icons/home_icon.jpg";

newElement.appendChild(newElementInner);
header.appendChild(newElement);

newElement = document.createElement('a');
newElement.id = "header_help_btn";
newElement.href = "#";
newElement.innerHTML = "AYUDA";
navbar.appendChild(newElement);

newElement = document.createElement('a');
newElement.id = "header_about_btn";
newElement.href = "#";
newElement.innerHTML = "ACERCA DE";
navbar.appendChild(newElement);

newElement = document.createElement('a');
newElement.id = "header_login_btn";
if (header.hasAttribute("logged")){
    newElement.href = "user_index.html";
    newElement.innerHTML = "NOMBRE USUARIO";
}else{
    newElement.href = "login.html";
    newElement.innerHTML = "INICIAR SESION";
}
navbar.appendChild(newElement);

header.appendChild(navbar);

// FOOTER

let footer = document.getElementsByTagName("footer")[0];

newElement = document.createElement('p');
newElement.innerHTML = "Copyright © 2021 Todos los derechos reservados | ";

newElementInner = document.createElement('a');
newElementInner.href = "politics.html";
newElementInner.innerHTML = "Políticas de servicio";

newElement.appendChild(newElementInner);
footer.appendChild(newElement);