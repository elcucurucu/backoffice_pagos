<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('tipo_documento');
		echo $this->Form->input('documento');
		echo $this->Form->input('status');
		echo $this->Form->input('role');
		echo $this->Form->input('fecha_alta');
		echo $this->Form->input('fecha_pago');
		echo $this->Form->input('codigo_referer');
		echo $this->Form->input('telefono');
		echo $this->Form->input('linea');
		echo $this->Form->input('banco');
		echo $this->Form->input('estado_comision');
		echo $this->Form->input('nivel');
		echo $this->Form->input('config_moneda_pago');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuario.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
