<div class="multimedia index">
	<h2><?php echo __('Multimedia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('id_categoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($multimedia as $multimedia): ?>
	<tr>
		<td><?php echo h($multimedia['Multimedia']['id']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['url']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['id_categoria']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $multimedia['Multimedia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $multimedia['Multimedia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $multimedia['Multimedia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $multimedia['Multimedia']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Multimedia'), array('action' => 'add')); ?></li>
	</ul>
</div>
