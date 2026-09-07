<h1>listado Producto</h1>
<table>
    <?php if (!empty($productos)): ?>
        <tr>
            <?php foreach (array_keys($productos[0]) as $campo): ?>
                <th><?= htmlspecialchars(ucwords(str_replace('_', ' ', $campo)), ENT_QUOTES, 'UTF-8') ?></th>
            <?php endforeach; ?>
        </tr>
    <?php endif; ?>
    <?php foreach (($productos ?? []) as $producto): ?>
        <tr>
            <?php foreach ($producto as $valor): ?>
                <td><?= htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8') ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>