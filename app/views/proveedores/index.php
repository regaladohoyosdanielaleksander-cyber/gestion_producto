<h1>Listado de proveedores</h1>

<?php if (empty($proveedores)): ?>
	<p>No hay proveedores registrados.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<?php foreach (array_keys($proveedores[0]) as $campo): ?>
					<th><?= htmlspecialchars(ucwords(str_replace('_', ' ', $campo)), ENT_QUOTES, 'UTF-8') ?></th>
				<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($proveedores as $proveedor): ?>
				<tr>
					<?php foreach ($proveedor as $valor): ?>
						<td><?= htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8') ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
