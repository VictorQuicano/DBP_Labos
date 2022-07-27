<?php
    class base_datos{
        private $host;
        private $usua;
        private $pass;
        private $bd;
        private $conexion;

        function __construct($host, $usua, $pass, $bd)
        {
           $this->host = $host;
           $this->usua = $usua;
           $this->pass = $pass;
           $this->bd = $bd;
        }
        function conectar(){
            $this->conexion = mysqli_connect($this->host, $this->usua, $this->pass, $this->bd);
            $this->conexion->set_charset("uft8");
            if (mysqli_connect_errno()){
                echo "error al conectarse";
            }
        }
        function getClientes(){
            $result = mysqli_query($this->conexion, "SELECT * FROM clientes");
            $error = mysqli_error($this->conexion);
            if (empty($error)){
                if (mysqli_num_rows($result)>0){
                    return $result;
                }
            }
            else{
                echo "error al obtener clientes";
            }
        }
        function isnClientes($dni, $nom, $ape, $email, $tele){
            mysqli_query($this->conexion, "INSERT INTO clientes VALUES (".$dni.", '".$nom."', '".$ape."', '".$email."', ".$tele.")");
            $error=mysqli_error($this->conexion);
            if (empty($error)){
                return true;
            }
            echo "error al insertar cliente";
            return false;
        }
        function cerrar(){
            mysqli_close($this->conexion);
        }
    }

?>