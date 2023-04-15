<?php
class Conexion{
    protected $conn;

    public function conectar(){
        //mysqli, PDO
        $this->conn = mysqli_connect(
            /** servidor, usuario, contraseña, nombre de la bd */
            "localhost","root","","tienda"
        );
    }
}


?>