<?php include "BaseDatos.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Formulario Registro de Clientes</title>
    <link rel="stylesheet" href="Mi_estilo.css">
</head>
<body>
    <section id="seccionT">
        <h1>FORMULARIO REGISTRO DE CLIENTES</h1>
        <form method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>" id="contiene">
            <div class="contenedor">
                <?php
                    $BaseDatos = new base_datos("localhost:3307","root","","formulario_dbp");
                    $BaseDatos->conectar();

                    if ($_SERVER["REQUEST_METHOD"]=="POST"){
                        $dni = $_POST["DNI"];
                        $nom = $_POST["nombre"];
                        $ape = $_POST["apellido"];
                        $mail = $_POST["email"];
                        $tele = $_POST["Telefono"];

                        $errores = array();
                        if(empty($dni)||empty($nom)||empty($ape)||empty($mail)||empty($tele)){
                        array_push($errores, "TODOS LOS CAMPOS SON OBLIGATORIOS");
                        }if(strlen($dni)!=8){
                            array_push($errores, "DNI no valido.");
                        }if(strlen($nom)<=3 || strlen($nom)>=50){
                            array_push($errores, "NOMBRE no valido.");
                        }if(strlen($ape)<=3 || strlen($ape)>=50){
                            array_push($errores, "APELLIDO no valido.");
                        }if(filter_var($mail, FILTER_VALIDATE_EMAIL)==False){
                            array_push($errores, "EMAIL no valido.");
                        }if (strlen($tele)!=9){
                            array_push($errores, "TELEFONO no valido.");
                        }if (count($errores)>0){
                            echo"<div class ='error'>";
                            for($i=0;$i<count($errores);$i++){
                                echo "<li>".$errores[$i]."</li>";
                            }
                        }else{
                            echo "<div class='correcto'> Datos Correctos<br>";
                            $BaseDatos->isnClientes($dni, $nom, $ape, $mail, $tele);
                        }echo"</div>";
                    }
                ?>

                <div class="tablaRelleno">
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
                    <button id="btnAgregar" class="boton" type="submit">Agregar</button>
                </div>
            </div>
        </form>
        
        <br></br>
        <table id="tablaUsu" class ="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <?php
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
            <tbody></tbody>
        </table>
    </section>
</body>
