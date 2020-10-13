<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_documento'); ?></th>
			<th><?php echo $this->Paginator->sort('documento'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_alta'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_pago'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_referer'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('linea'); ?></th>
			<th><?php echo $this->Paginator->sort('banco'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_comision'); ?></th>
			<th><?php echo $this->Paginator->sort('nivel'); ?></th>
			<th><?php echo $this->Paginator->sort('config_moneda_pago'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipo_documento']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['documento']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['status']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['role']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['fecha_alta']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['fecha_pago']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['codigo_referer']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['linea']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['banco']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['estado_comision']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nivel']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['config_moneda_pago']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>
