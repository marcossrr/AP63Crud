<?php
require_once "Autoload.php";

$gestor = new GestorProducto();

for ($i=1;$i<=50;$i++){
    $producto = new Nintendo($i, "producto$i", $i*10, rand(0,1));
    $gestor->agregar($producto);
}

//Actualizamos 2 productos
$gestor->actualizar(10, "nuevoProducto10", 99, rand(0,1));
$gestor->actualizar(20, "nuevoProducto20", 99, rand(0,1));

//Eliminamos 2 productos
$gestor->eliminar(30);
$gestor->eliminar(40);

$productos = $gestor->listar();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP con POO y Arrays</title>
</head>
<body>

<!-- LISTADO -->
<h2>Listado de Productos</h2>

<?php if (empty($productos)): ?>
    <p>No hay productos aún.</p>
<?php else: ?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Version</th>
    </tr>

    <?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p->getId() ?></td>
        <td><?= $p->getNombre() ?></td>
        <td><?= $p->getPrecio() ?></td>
        <td><?= $p->getVersion() ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php endif; ?>

</body>
</html>
