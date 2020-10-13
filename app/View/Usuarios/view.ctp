<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Documento'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipo_documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Alta'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fecha_alta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Pago'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fecha_pago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Referer'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['codigo_referer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linea'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['linea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banco'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['banco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Comision'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['estado_comision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nivel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Config Moneda Pago'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['config_moneda_pago']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
