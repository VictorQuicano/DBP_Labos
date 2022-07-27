<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Formulario PhP</title>
    <link rel="stylesheet" href="Mi_estilo2.css">
</head>
<body>
    <section id="seccionT">
        <h1>FORMULARIO REGISTRO DE CLIENTES_USANDO POST</h1>
        <form action="Mostrar_php.php" method="POST" id="contiene">
            
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
                        <label id="l1"><strong>Mascota Favorita</strong></label>
                        <div class="Fila">
                            <div class="op_1">
                                <input type="checkbox" value="Perros" name="mascota[]"/>
                                <label for="Perros">Perros</label>
                            </div>
                            <div class="op_2">
                                <input type="checkbox" value="Ratones" name="mascota[]"/>
                                <label for="Ratones">Ratones</label>
                            </div>
                            <div class="op_3">
                                <input type="checkbox" value="Loros" name="mascota[]"/>
                                <label for="Loros">Loros</label>
                            </div>
                            <div class="op_4">
                                <input type="checkbox" value="Tortugas" name="mascota[]"/>
                                <label for="Tortugas">Tortugas</label>
                            </div>
                            <div class="op_5">
                                <input type="checkbox" value="Gatos" name="mascota[]"/>
                                <label for="Gatos" >Gatos</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_502">
                    <div class="campo">
                    <label id="l1"><strong>Cantidad de hijos</strong></label><br>
                    <select name="hijos">
                        <option>No tengo hijos</option>
                        <?php
                        for ($i=1;$i<=6;$i++) {
                            echo "<option value ='$i' class='lista'> $i</option>";
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <button id="btnAgregar" class="boton" type="submit">Añadir</button>
            </div>
        </form>
    </section>
</body>