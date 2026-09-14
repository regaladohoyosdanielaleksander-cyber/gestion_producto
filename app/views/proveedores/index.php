<h1>Listado de proveedores</h1>

<?php if (empty($proveedores)): ?>

    <p>No hay proveedores registrados.</p>

<?php else: ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>Nombre</th>
            <th>Dirección</th>
        </tr>

        <?php foreach ($proveedores as $proveedor): ?>
            <tr>
                <td><?= $proveedor['id_proveedor'] ?></td>
                <td><?= $proveedor['ciudad'] ?></td>
                <td><?= $proveedor['nombre'] ?></td>
                <td><?= $proveedor['direccion'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

<?php endif; ?>