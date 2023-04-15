<?php
require 'Conexion.php';

class TArticulos extends Conexion{
    public $id;
    public $codigo;
    public $descripcion;
    public $precio;
    public $stock;
    public $IdProveedor;

    public function obtener_Articulo(){
        $this->conectar();
        $query = "SELECT * FROM t_articulo";
        //metodo para ejecutar la consulta
        $resultado = mysqli_query($this->conn, $query);
        return $resultado;
    }

    public function registrar(){
        $this->conectar();
        if(isset($_POST['codigo'], $_POST['descripcion'], $_POST['precio'], $_POST['stock'])){
            $this->codigo = $_POST['codigo'];
            $this->descripcion = $_POST['descripcion'];
            $this->precio = $_POST['precio'];
            $this->stock = $_POST['stock'];

            if(isset($_POST['guardar'])){
                $query = "INSERT INTO empleados(codigo, descripcion, precio, stock)
                            VALUES ('$this->codigo','$this->descripcion',$this->precio, $this->stock)";
                $resultado = mysqli_query($this->conn, $query);
                if(!empty($resultado)){
                    header("location:../index.php");
                }else{
                    echo "Error al guardar el registro";
                }
            }
        }
    }
}

?>