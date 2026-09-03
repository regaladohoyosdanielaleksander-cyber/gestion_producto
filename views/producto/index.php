<h1>listado Producto</h1>
<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['stock'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>