<h1>Listado de clientes</h1>
<table>
	<tr>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Teléfono</th>
	</tr>
	<?php foreach (($clientes ?? []) as $cliente): ?>
		<tr>
			<td><?= htmlspecialchars($cliente['nombre'], ENT_QUOTES, 'UTF-8') ?></td>
			<td><?= htmlspecialchars($cliente['correo'], ENT_QUOTES, 'UTF-8') ?></td>
			<td><?= htmlspecialchars($cliente['telefono'], ENT_QUOTES, 'UTF-8') ?></td>
		</tr>
	<?php endforeach; ?>
</table>
