<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UFT-8">
    <?php
        $nombre =$_POST{"nombre"};
        echo "<title>Datos de $nombre";
        echo "</title>";
        $apellido = $_POST{"apellido"};
        $email1 = $_POST{"email1"};
        if (isset($_POST{"state"})){
            $state = $_POST{"state"};
        }
        else{
            $state = "Es difícil";
        }
        if (isset($_POST{'mascota'})){
            $Mascotitas = "Son";
            $valor = implode (", ", $_POST["mascota"]);
            $Mascotitas = $Mascotitas.' '.$valor;
        }
        else{
            $Mascotitas = "No te gustan los animales";
        }
        if(isset($_POST{'hijos'})){
            $ninos= $_POST{'hijos'};
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
                        echo "<p>Hemos recolectado los siguientes datos sobre ti.</p><ul><li><strong>Email:</strong> $email1</li><li><strong>Estado:</strong> $state</li><li><strong>Mascotas:</strong> $Mascotitas</li><li><strong>Número de hijos:</strong> $ninos</li>";
                    ?>

                </article>
            </div>
        </form>
    </section>
</body>
</html>