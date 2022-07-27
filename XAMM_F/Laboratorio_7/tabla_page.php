<?php
include ("BaseDatos.php");
$BaseD = new base_datos("localhost","root", "", "formulario_dbp");
$BaseD->conectar();

$dni = $_POST["dni"];
$nom = $_POST["nombre"];
$ape = $_POST["apellido"];
$mail = $_POST["email"];
$tele = $_POST["telefono"];

$i = 0;
for ($a = 0; $a<99999; $a++){
    $i+=1;
}

$BaseD->isnClientes($dni, $nom, $ape, $mail, $tele);

$clientes = $BaseD->getClientes();
if (!is_null($clientes)){
    while($row = mysqli_fetch_assoc($clientes)){
        echo "<tr>";
        echo "<td>".$row["DNI"]."</td>";
        echo "<td>".$row["Nombre"]."</td>";
        echo "<td>".$row["Apellido"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["Telefono"]."</td>";
        echo "</tr>";
    }
}
$BaseD->cerrar();
?>