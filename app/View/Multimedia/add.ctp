<div class="multimedia form">
<?php echo $this->Form->create('Multimedia'); ?>
	<fieldset>
		<legend><?php echo __('Add Multimedia'); ?></legend>
	<?php
		echo $this->Form->input('url');
		echo $this->Form->input('id_categoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Multimedia'), array('action' => 'index')); ?></li>
	</ul>
</div>
