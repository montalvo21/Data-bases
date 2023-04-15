<?php require 'clases/Proveedor.php'; ?>
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
        $proveedor = new TProveedor();
        $arreglo = $proveedor->obtenerProveedores();
    ?>
    <div class="container">
        <h1>Listado de Proveedores</h1>
        <a href="vistas/registrarProveedor.php" class="btn btn-dark">Registrar Proveedor</a>

        <table class="table table-hover">
            <thead>
                <th>N°</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>NIT</th>
                <th>Direccion</th>
            </thead>
            <tbody>
                <?php
                    $cont = 1;
                    foreach($arreglo as $item){
                ?>
                    <tr>
                        <td><?php echo $cont; ?></td>
                        <td><?php echo $item['Nombre']; ?></td>
                        <td><?php echo $item['Telefono']; ?></td>
                        <td><?php echo $item['Correo']; ?></td>
                        <td><?php echo $item['NIT']; ?></td>
                        <td><?php echo $item['Direccion']; ?></td>
                        <td>
                            <form action="vistas/actualizarProveedor.php" method="POST">
                                <input type="hidden" name="id_proveedor" value="<?php echo $item['Id']  ?>">
                                <button class="btn btn-info">Actualizar</button>
                            </form>
                        </td>
                        <td>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                <?php $cont++; } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
