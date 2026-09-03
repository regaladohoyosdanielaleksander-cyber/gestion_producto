<h1>listado Producto</h1>
<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th>
    </tr>
    <?php foreach (($productos ?? []) as $producto): ?>
        <tr>
            <td><?= htmlspecialchars($producto['nombre'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars((string) $producto['precio'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars((string) $producto['stock'], ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
    <?php endforeach; ?>
</table>