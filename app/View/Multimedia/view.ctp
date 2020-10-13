<div class="multimedia view">
<h2><?php echo __('Multimedia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Categoria'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['id_categoria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Multimedia'), array('action' => 'edit', $multimedia['Multimedia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Multimedia'), array('action' => 'delete', $multimedia['Multimedia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $multimedia['Multimedia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
