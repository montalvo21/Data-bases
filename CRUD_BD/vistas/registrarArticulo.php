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
        $empleado = new TArticulos();
        $Articulo = $empleado->$obtener_Articulo();
    ?>
    <div class="container">
        <h1>Registro de Articulos</h1>
        <form action="" method="POST">
            <label for="">Codigo de venta</label>
            <input type="number" class="form-control" name="codigo de venta">
            <label for="">Descripcion</label>
            <input type="text" class="form-control" name="Descripcion">
            <label for="">Precio</label>
            <input type="number" class="form-control" name="Precio">
            <label for="">Stock</label>
            <input type="number" class="form-control" name="Stock">
            <label for="">Direccion</label>
            <input type="text" class="form-control" name="Direccion"><br>
            <label for="">Seleccionar Articulos</label>
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
    </div>
</body>
</html>