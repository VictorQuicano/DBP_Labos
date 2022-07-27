<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro (Nuevo Usuario)</title>
    <link rel="stylesheet"href="Mi_estilo.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <?php
            include("BaseDatos.php");
            $usua=$_POST["usuario"];
            $clav=$_POST["contra"];
            $dir="Recursos/";
            $file=$_FILES["foto"];
            $path=$_FILES['foto']['name'];
            $ext=pathinfo($path,PATHINFO_EXTENSION);
            if(!move_uploaded_file($file["tmp_name"],"$dir/".$usua.".".$ext)){
                echo"<p id='ref' class='message'><a href='Login.php'> Regresa al Login </a></p>";
                echo"<h1>No se pudo subir la foto del usuario</h1>";
                return;
            }
            $BaseDatos=new base_datos("localhost","root","","formulario_dbp");
            $BaseDatos->conectar();
            if($BaseDatos->isnUsuario($usua,$clav)){
                echo"<h1>El usuario se registro correctamente</h1>";
            }else{
                echo"<h1>Hubo un error al registrar al usuario</h1>";
            }
            echo"<p id='ref' class='message'><a href='Login.php'> Regresa al Login </a></p>";
            $BaseDatos->cerrar();
            ?>
        </div>
    </div>
</body>
</html>