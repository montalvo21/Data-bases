<?php
require 'Conexion.php';

class TProveedor extends Conexion{
    public $id;
    public $nombre;
    public $Telefono;
    public $Correo;
    public $NIT;
    public $Direccion;
    public $IdGrupoProv;

    public function obtenerGrupo_Prov(){
        $this->conectar();
        $query = "SELECT * FROM t_grupo_prov";
        //metodo para ejecutar la consulta
        $resultado = mysqli_query($this->conn, $query);
        return $resultado;
    }

    public function registrar(){
        $this->conectar();
        if(isset($_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['nit'], $_POST['direccion'], $_POST['Grupo_Prov'])){
            $this->nombre = $_POST['nombre'];
            $this->Telefono = $_POST['telefono'];
            $this->Correo = $_POST['correo'];
            $this->NIT = $_POST['nit'];
            $this->Direccion = $_POST['direccion'];
            $this->IdGrupoProv = $_POST['Grupo_Prov'];

            if(isset($_POST['guardar'])){
                $query = "INSERT INTO t_proveedor(Nombre, Telefono, Correo, NIT, Direccion, IdGrupoProv)
                            VALUES ('$this->nombre','$this->Telefono','$this->Correo', '$this->NIT', '$this->Direccion', $this->IdGrupoProv)";
                $resultado = mysqli_query($this->conn, $query);
                if(!empty($resultado)){
                    header("location:../index.php");
                }else{
                    echo "Error al guardar el registro";
                }
            }
        }
    }

    public function obtenerProveedores(){
        $this->conectar();
        $query = "SELECT * FROM t_proveedor";
        //metodo para ejecutar la consulta
        $resultado = mysqli_query($this->conn, $query);
        return $resultado;
    }

     /** Obtener empleado por su ID */
     public function proveedorById(){
        $this->conectar();
        if(isset($_POST['id_proveedor'])){
            $this->id = $_POST['id_proveedor'];
            $query = "SELECT t_proveedor.*, t_grupo_prov.Descripcion AS t_grupo_prov FROM t_proveedor INNER JOIN t_grupo_prov ON t_proveedor.IdGrupoProv = t_grupo_prov.Id WHERE t_proveedor.Id = $this->id";
            $resultado = mysqli_query($this->conn, $query);
            return $resultado;
        }
    }

    /** actualizar empleado */
    public function actualizar(){
        $this->conectar();
        if(isset($_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['nit'], $_POST['direccion'], $_POST['Grupo_Prov'])){
            $this->nombre = $_POST['nombre'];
            $this->Telefono = $_POST['telefono'];
            $this->Correo = $_POST['correo'];
            $this->NIT = $_POST['nit'];
            $this->Direccion = $_POST['direccion'];
            $this->IdGrupoProv = $_POST['Grupo_Prov'];
            $this->id = $_POST['id'];
            if(isset($_POST['actualizar'])){
                $query = "UPDATE t_proveedor SET Nombre = '$this->nombre', Telefono = '$this->Telefono', Correo = '$this->Correo', 
                            NIT = '$this->NIT', Direccion = '$this->Direccion', IdGrupoProv = $this->IdGrupoProv
                            WHERE Id = $this->id";
                $resultado = mysqli_query($this->conn, $query);
                if(!empty($resultado)){
                    header("location:../index.php");
                }else{
                    echo "Error al actualizar el registro";
                }
            }
        }
    }

}

?>