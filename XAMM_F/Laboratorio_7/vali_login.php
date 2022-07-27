<?php
include("BaseDatos.php");

session_start();

$BaseDatos=new base_datos("localhost","root","","formulario_dbp");

$BaseDatos->conectar();
$usu = $_POST["Usuario"];
$cla = $_POST["Contra"];
$usuarios = $BaseDatos->getUsuarios();
if(!is_null($usuarios)){
   while($row=mysqli_fetch_assoc($usuarios)){
        if($row["usuario"] == $usu  && $row["clave"] == $cla){
            $_SESSION["usuario"] = $usu;
            $BaseDatos -> cerrar();
            echo"OK";
            return;
        }
   }
}
session_unset();
session_destroy();
echo"Usuario no registado";
$BaseDatos->cerrar();
?>