<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet"href="Mi_estilo.css">
</head>
<body>
    <section id="seccionT">
        <form action="registrar_usuario.php"method="POST"enctype="multipart/form-data" id="contiene">
            <div class="tablaRelleno">
                <h1 id="titu">REGISTRO</h1>
                    <div class="col_50">
                        <input class="campo" id="usuario" type="text" name="usuario" placeholder="Usuario..."/>
                    </div>
                    <div class="col_50">
                        <input class="campo" id="Clave" type="password" name="contra" placeholder="contraseña..."/>
                    </div>
                    <div class="col_50">
                        <label>Seleccione una foto:</label>
                        <input class ="campo "id="foto"name="foto"type="file"/>
                    </div>
                    <button id="btnRegistrar" class="boton" type="submit">Registrase</button>
                </div>
        </form>
        <br><br><br>
        <label>Regresar al<strong><a id="ref" href="Login.php"> LOGIN</a></strong></label>
    </section>
</body>
</html>