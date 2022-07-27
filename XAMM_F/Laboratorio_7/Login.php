<?php include "BaseDatos.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Formulario Registro de Clientes</title>
    <link rel="stylesheet" href="Mi_estilo.css">
    <script type="text/javascript" src="Login.js"></script>
</head>
<body>
    <section id="seccionT">
        <form id="contiene">
            <div class="tablaRelleno">
                <h1 id="titu">INICIAR<br>SESIÓN</h1>
                <div class="col_50">
                    <input class="campo" id="Usuario" type="text" name="Usuario" placeholder="Usuario..."/>
                </div>
                <div class="col_50">
                    <input class="campo" id="Contra" type="password" name="Contra" placeholder="contraseña..."/>
                </div>
                <section id="crear">
                    <label>¿No tienes una cuenta? <strong><a id="ref" href="Registro.php">CREA UNA CUENTA</a></strong></label>
                </section>
                <button id="btnIniciar" class="boton" type="button">Ingresar</button>
                </div>
        </form>
        <p class="msj_error" id="mensaje" name="mensaje"></p>
    </section>
</body>
