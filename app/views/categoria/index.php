<h1>Listado de categorías</h1>

<?php if (empty($categorias)): ?>

    <p>No hay categorías registradas.</p>

<?php else: ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>

        <?php foreach ($categorias as $categoria): ?>

            <tr>
                <td><?= $categoria['id_categoria'] ?></td>
                <td><?= $categoria['nombre'] ?></td>
                <td><?= $categoria['descripcion'] ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

<?php endif; ?>


<h2>Consulta de categoría</h2>

<?php if (!empty($categoria)): ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>

        <tr>
            <td><?= $categoria['id_categoria'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>
    </table>

<?php else: ?>

    <p>No se encontró la categoría.</p>

<?php endif; ?>