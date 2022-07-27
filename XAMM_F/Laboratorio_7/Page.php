<?php 
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
include ("BaseDatos.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Formulario Registro de Clientes</title>
    <link rel="stylesheet" href="Mi_estilo.css">
    <script type="text/javascript" src="Funciones.js"></script>
</head>
<body>
    <section>
        <h1>¡BIENVENIDO <?php echo $_SESSION["usuario"]?></h1>
        <div id="usu">
            <img width='100' src="Recursos/<?php echo $_SESSION["usuario"]?>.jpg">
            <br>
            <a id="ref" href="Logout.php">CERRAR SESIÓN</a>
        </div>
    </section>
    <section id="seccionT">
        <form id="contiene">  
            <div class="tablaRelleno">
                <h3>FORMULARIO REGISTRO DE CLIENTES</h3>
                <div class="col_50">
                    <input class="campo" id="DNI" type="DNI" name="DNI" placeholder="DNI..."/>
                </div>
                <div class="col_50">
                    <input class="campo" id="nombre" type="text" name="nombre" placeholder="Nombre..."/>
                </div>
                <div class="col_50">
                    <input class="campo" id="apellido" name="apellido" type="text" placeholder="Apellido..."/>
                </div>
                <div class="col_50">
                    <input class="campo" id="email" type="text" name="email" placeholder="Email..."/>
                </div>
                <div class="col_50">
                    <input class="campo" id="Telefono" type="text" name="Telefono" placeholder="Teléfono..."/>
                </div>
                <button id="btnAgregar" class="boton" type="button"<?php if($_SESSION["usuario"]!="Ale_Q"){echo "disabled";}?>>Agregar</button>
            </div>
        </form>
        
        <br><br>
        <h2 class="subtitulo">CLIENTES REGISTRADOS</h2>
        <table id="tablaUsu" class ="tabla">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody id="ContenedorAJAX">
            <?php
                $BaseDatos = new base_datos("localhost","root", "", "formulario_dbp");
                $BaseDatos->conectar();
                $clientes=$BaseDatos->getClientes();
                if (!is_null($clientes)) {
                    while ($row = mysqli_fetch_assoc($clientes)){
                        echo "<tr>";
                        echo "<td>".$row["DNI"]."</td>";
                        echo "<td>".$row["Nombre"]."</td>";
                        echo "<td>".$row["Apellido"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["Telefono"]."</td>";
                        echo "</tr>";
                    }
                }
                $BaseDatos->cerrar();
            ?>
            </tbody>
        </table>
    </section>
</body>
