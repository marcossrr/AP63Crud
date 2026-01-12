<?php

require_once('AutoloadV2.php');
session_start();

$gestor = new GestorProducto();

$accion = $_GET['accion'] ?? null;

if ($accion === 'crear') {
    $id = uniqid();
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $consola = new Consola($id, $nombre, $precio);
    $gestor->agregar($consola);

    header("Location: index.php");
    exit;
}

if ($accion === 'editar') {
    $gestor->actualizar($_POST['id'], $_POST['nombre'], $_POST['precio']);
    header("Location: index.php");
    exit;
}

if ($accion === 'eliminar') {
    $gestor->eliminar($_GET['id']);
    header("Location: index.php");
    exit;
}

if ($accion === 'borrar') {
    session_unset();
    header("Location: index.php");
    exit;
}

$consola = $gestor->listar();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP con POO y Arrays</title>
</head>
<body>

<h1>Gestión de Productos</h1>
<hr>
<!-- FORMULARIO CREAR -->
<h2>Crear Producto</h2>

<form method="POST" action="index.php?accion=crear" style="display:inline;">
    Nombre: 
    <input type="text" name="nombre" required>

    Precio: 
    <input type="number" step="1" name="precio" required>

    <button type="submit">Agregar</button>
</form>

<hr>

<!-- LISTADO -->
<h2>Listado de Productos</h2>

<?php if (empty($consola)): ?>
    <p>No hay productos aún.</p>
<?php else: ?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($consola as $p): ?>
    <tr>
        <td><?= $p->getId() ?></td>
        <td><?= $p->getNombre() ?></td>
        <td><?= $p->getPrecio() ?></td>
        <td>
            <!-- Botón Editar -->
            <form method="POST" action="index.php?accion=editar" style="display:inline;">
                <input type="hidden" name="id" value="<?= $p->getId() ?>">
                Nombre: <input type="text" name="nombre" value="<?= $p->getNombre() ?>" required>
                Precio: <input type="number" step="1" name="precio" value="<?= $p->getPrecio() ?>" required>
                <button type="submit">Editar</button>
            </form>

            <!-- Botón Eliminar -->
            <a href="index.php?accion=eliminar&id=<?= $p->getId() ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

<?php endif; ?>
<h3>Borrar todos los Productos</h3>
<form method="POST" action="index.php?accion=borrar" style="display:inline;">
    <button type="submit">Borrar</button>
</form>

</body>
</html>