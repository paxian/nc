<div class="deliveries form">
<?php echo $this->Form->create('Delivery'); ?>
	<fieldset>
		<legend><?php echo __('Edit Delivery'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year');
		echo $this->Form->input('folio');
		echo $this->Form->input('fecha');
		echo $this->Form->input('referencia');
		echo $this->Form->input('estatus');
		echo $this->Form->input('comentarioAsesor');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apaterno');
		echo $this->Form->input('amaterno');
		echo $this->Form->input('talonarios');
		echo $this->Form->input('asignacion');
		echo $this->Form->input('direccion');
		echo $this->Form->input('entreCalles');
		echo $this->Form->input('colonia');
		echo $this->Form->input('codigoPostal');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('zonaAsesor');
		echo $this->Form->input('asesor');
		echo $this->Form->input('otroDomicilio');
		echo $this->Form->input('fechaEntrega');
		echo $this->Form->input('horaInicial');
		echo $this->Form->input('horaFinal');
		echo $this->Form->input('telefonos');
		echo $this->Form->input('observacionesOperador');
		echo $this->Form->input('estatusPagare');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Delivery.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Delivery.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
