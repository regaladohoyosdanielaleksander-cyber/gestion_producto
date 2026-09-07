<h1>Listado de clientes</h1>
<table>
	<?php if (!empty($clientes)): ?>
		<tr>
			<?php foreach (array_keys($clientes[0]) as $campo): ?>
				<th><?= htmlspecialchars(ucwords(str_replace('_', ' ', $campo)), ENT_QUOTES, 'UTF-8') ?></th>
			<?php endforeach; ?>
		</tr>
	<?php endif; ?>
	<?php foreach (($clientes ?? []) as $cliente): ?>
		<tr>
			<?php foreach ($cliente as $valor): ?>
				<td><?= htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8') ?></td>
			<?php endforeach; ?>
		</tr>
	<?php endforeach; ?>
</table>
