<?php require '../clases/Proveedor.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        $empleado = new TProveedor();
        $Grupos_Prov = $empleado->obtenerGrupo_Prov();
    ?>
    <div class="container">
        <h1>Registro de Proveedores</h1>
        <form action="" method="POST">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre">
            <label for="">Telefono</label>
            <input type="number" class="form-control" name="telefono">
            <label for="">Correo</label>
            <input type="text" class="form-control" name="correo">
            <label for="">NIT</label>
            <input type="number" class="form-control" name="nit">
            <label for="">Direccion</label>
            <input type="text" class="form-control" name="direccion"><br>
            <label for="">Seleccionar Proveedor</label>
            <select name="Grupo_Prov" class="form-control">
                <?php
                    //Iterando los departamentos de la bd
                    foreach($Grupos_Prov as $value){
                ?>
                    <option value="<?php echo $value['Id'] ?>"><?php echo $value['Descripcion'] ?></option>
                <?php } ?>
            </select><br>
            <input class="btn btn-success" type="submit" name="guardar" value="Registrar Empleado">
        </form>
        <?php $empleado->registrar();
        ?>
    </div>
</body>
</html>