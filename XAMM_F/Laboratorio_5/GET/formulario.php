<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Formulario PhP</title>
    <link rel="stylesheet" href="Mi_estilo2.css">
</head>
<body>
    <section id="seccionT">
        <h1>FORMULARIO REGISTRO DE CLIENTES</h1>
        <form action="Mostrar_php.php" method="get" id="contiene">
            
            <div class="tablaRelleno">
                <div class="col_50">
                    <input class="campo" id="nombre" name="nombre" type="text" placeholder="Nombre..."/>
                </div>
                <div class="col_50">
                    <input class="campo" id="apellido" name="apellido" type="text" placeholder="Apellido..."/>
                </div>
                <div class="col_50">
                    <input class="campo" id="email1" name="email1" type="text" placeholder="Email..."/>
                </div>
                <div class="col_501">
                    <div class="campo">
                        <label id="l1"><strong>Estado civil</strong></label>
                        <div class="Fila">
                            <div class="op_1">
                                <input type="radio" name="state" value="Casado"/>
                                <label for="casado">Casado</label>
                            </div>
                            <div class="op_2">
                                <input type="radio" name="state" value="Soltero"/>
                                <label for="casado">Soltero</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_501">
                    <div class="campo">
                        <label id="l1"><strong>Hobbies</strong></label>
                        <div class="Fila">
                            <div class="op_1">
                                <input type="checkbox" id="HacerD" value="HacerD" name="hobbie[]"/>
                                <label for="Hacer Deporte">Hacer Deporte</label>
                            </div>
                            <div class="op_2">
                                <input type="checkbox" id="Pintar" value="Pintar" name="hobbie[]"/>
                                <label for="Pintar">Pintar</label>
                            </div>
                            <div class="op_3">
                                <input type="checkbox" id="Comer" value="Comer" name="hobbie[]"/>
                                <label for="Comer">Comer</label>
                            </div>
                            <div class="op_4">
                                <input type="checkbox" id="Cocinar" value="Cocinar" name="hobbie[]"/>
                                <label for="Cocinar">Cocinar</label>
                            </div>
                            <div class="op_5">
                                <input type="checkbox" id="Caminar" value="Caminar" name="hobbie[]"/>
                                <label for="Caminar" >Caminar</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_502">
                    <div class="campo">
                    <label id="l1"><strong>Año de nacimiento</strong></label><br>
                    <select name="anonace" id="nace">
                        <option>Elige un año</option>
                        <?php
                        for ($i=1900;$i<=2022;$i++) {
                            echo "<option value ='$i' class='lista'> $i</option>";
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <button id="btnAgregar" class="boton" type="submit">Agregar</button>
            </div>
        </form>
    </section>
</body>