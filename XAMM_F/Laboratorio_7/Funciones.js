console.clear();
const isEmpty = (str) => str.trim() === '';
const isMay3 = (str) => str.length < 3;
const isMay8 = (str) => str.length < 8;
const isMay9 = (str) => str.length < 9;

function agregar() {
    var dni = document.getElementById('DNI');
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');
    var telefono = document.getElementById('Telefono');
    dnivalue = dni.value;
    nombrevalue = nombre.value;
    apevalue = apellido.value;
    evalue = email.value;
    telefonovalue = telefono.value;
    
    tablaUsurio = document.getElementById('tablaUsu');
    if (isEmpty(nombrevalue) || isEmpty(apevalue) || isEmpty(evalue) || isEmpty(dnivalue) || isEmpty(telefonovalue)) {
        alert('Todos los campos son obligatorios');
        return;
    }
    if (isMay8(dnivalue)) {
        alert("DNI no valido");
        return;
    }
    if (isMay3(nombrevalue)) { 
        alert('El nombre ingresado no es valido');
        return;
    }
    if (isMay3(apevalue)) { 
        alert('El apellido ingresado no es valido');
        return;
    }
    if (isMay9(telefonovalue)) {
        alert('El Telefono ingresado no es valido');
        return;
    }
    if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(evalue)) {
        alert('El email ingresado no es valido');
        return;
    }
    var contenido = document.getElementById("ContenedorAJAX");

    if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest();
    }
    else {
        ajax = new ActiveXObject("Microsoft.XMLHTTP");
    }
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenido.innerHTML = ajax.responseText;
        }
        else {
            contenido.innerHTML= "<img width='200' src='charging.gif'>";
        }            
    }
    ajax.open("POST", "tabla_page.php");
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("dni=" + dnivalue + "&nombre=" + nombrevalue + "&apellido=" + apevalue + "&email=" + evalue + "&telefono=" + telefonovalue);
};
function asignar() {
    btnAgregar = document.getElementById('btnAgregar');
    btnAgregar.addEventListener("click", agregar);
}

window.addEventListener("load", asignar);