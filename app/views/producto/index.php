<h1>Listado Producto</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>ID Proveedor</th>
    </tr>

    <?php foreach ($producto as $producto): ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['stock'] ?></td>
            <td><?= $producto['id_proveedor'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>


<h2>Consulta Producto</h2>

<?php if (!empty($producto)): ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>ID Proveedor</th>
            <th>Proveedor</th>
        </tr>
<?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['stock'] ?></td>
            <td><?= $producto['id_proveedor'] ?></td>
            <td><?= $producto['nombre_proveedor'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php else: ?>

    <p>No se encontró el producto.</p>

<?php endif; ?>