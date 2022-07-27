console.clear();
const isEmpty = (str) => str.trim() === '';

function acceder() {
    var usuario = document.getElementById('Usuario');
    var contrasena = document.getElementById('Contra');
    usuariovalue = usuario.value;
    contravalue = contrasena.value;
    if (isEmpty(usuariovalue) || isEmpty(contravalue)) {
        alert('Todos los campos son obligatorios');
        return;
    }
    var mensa = document.getElementById("mensaje");
    if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest();
    }
    else {
        ajax = new ActiveXObject("Microsoft.XMLHTTP");
    }
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            if (ajax.responseText.trim()=="OK") {
                window.location.href ="page.php"
            }
            else {
                mensa.innerHTML= ajax.responseText;
            }
        }            
    }
    ajax.open("POST", "vali_login.php");
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("Usuario=" + usuariovalue + "&Contra=" + contravalue);
};

function asignar() {
    btnInsertar = document.getElementById('btnIniciar');
    btnIniciar.addEventListener("click", acceder);
    
};
window.addEventListener("load", asignar);