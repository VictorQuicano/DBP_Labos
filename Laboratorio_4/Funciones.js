/*function insertar() {
    


    var n=document.getElementById("numero").value;
    var t=document.getElementById("tablaNum");
    if(isNaN(n)){
        alert("El valor no es numero");
    }
    else{
       
        if (n>10){
                alert("El valor no es valido. El valor debe ser menor a 10");
        }
        else {
            t.lastElementChild.insertAdjacentHTML("beforeend","<tr>");
            for(var a=1;a<=20;a++){
                t.lastElementChild.lastElementChild.insertAdjacentHTML("beforeend","<td>"+n*a+"</td>");
            }
        }
    }   
};*/
console.clear();
var id = 0;
var getID = () => id++;
const isEmpty = (str) => str.trim() === '';
const isMay3 = (str) => str.length < 3;

function agregar() {
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');
    var lugar = document.getElementById('Lugar');
    nombrevalue = nombre.value;
    apevalue = apellido.value;
    evalue = email.value;
    luvalue = lugar.value;


    tablaUsurio = document.getElementById('tablaUsu');
    if (isEmpty(nombrevalue) || isEmpty(apevalue) || isEmpty(evalue) || isEmpty(luvalue)) {
        alert('Todos los campos son obligatorios');
        return;
    }
    if (isMay3(nombrevalue  )) { 
        alert('El nombre ingresado no es valido');
        return;
    }
    if (isMay3(apevalue)) { 
        alert('El apellido ingresado no es valido');
        return;
    }
    if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(evalue)) {
        alert('El email ingresado no es valido');
        return;
    }
    if (luvalue !== 'Arequipa' && luvalue !== 'Lima' && luvalue !== 'Otros') {
        alert('El lugar ingresado no es valido');
        return;
    }
    let id = getID();
    let fila = `<tr data-id="${id}">
                <td>${id}</td>
                <td>${nombrevalue}</td>
                <td>${apevalue}</td>
                <td>${evalue}</td>
                <td>${luvalue}</td>
                <td><button id="btnEliminar" class="btnEliminar">Eliminar</button></td>
                <tr/>`;
    tablaUsu.lastElementChild.insertAdjacentHTML('beforeend', fila);
    nombre.value = '';
    apellido.value = '';
    email.value = '';
    lugar.value = '';
    nombre.focus();
    btnEliminar = document.getElementById('btnEliminar');
    btnEliminar.addEventListener("click", (event) => {
        event.target.parentNode.parentNode.remove();
    });
};

function asignar() {
    btnAgregar = document.getElementById('btnAgregar');
    btnAgregar.addEventListener("click", agregar);
    
};
window.addEventListener("load", asignar);


