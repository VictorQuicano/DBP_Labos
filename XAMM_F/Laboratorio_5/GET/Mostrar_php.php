<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UFT-8">
    <?php
        $nombre =$_GET{"nombre"};
        echo "<title>Datos de $nombre";
        echo "</title>";
        $apellido = $_GET{"apellido"};
        $email1 = $_GET{"email1"};
        if (isset($_GET{"state"})){
            $state = $_GET{"state"};
        }
        else{
            $state = "Es difícil";
        }
        if (isset($_GET{'hobbie'})){
            $Hobby = "Son";
            $valor = implode (", ", $_GET["hobbie"]);
            $Hobby = $Hobby.' '.$valor;
        }
        else{
            $Hobby = "No especificados ";
        }
        if(isset($_GET{'anonace'})){
            $fecha= $_GET{'anonace'};
        }

    ?>
    <link rel="stylesheet" href="Mi_estilo2.css">
</head>
<body>
    <section id="seccionT">
        <h1>BIENVENIDO</h1>
        <form action="Mostrar_php"  method="get" id="contiene">
            <div class="tablaRelleno">
                <article>
                    <?php
                        echo"<h2> Hola $nombre $apellido</h2>";
                        echo "<p>Hemos recolectado los siguientes datos sobre ti.</p><ul><li><strong>Email:</strong> $email1</li><li><strong>Estado:</strong> $state</li><li><strong>Hobby:</strong> $Hobby</li><li><strong>Año de nacimiento:</strong> $fecha</li>";
                    ?>

                </article>
            </div>
        </form>
    </section>
</body>
</html>