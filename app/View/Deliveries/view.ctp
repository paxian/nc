<div class="deliveries view">
<h2><?php echo __('Delivery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folio'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['folio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referencia'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['referencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['estatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ComentarioAsesor'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['comentarioAsesor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apaterno'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['apaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amaterno'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['amaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talonarios'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['talonarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asignacion'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['asignacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EntreCalles'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['entreCalles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colonia'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['colonia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CodigoPostal'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['codigoPostal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ZonaAsesor'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['zonaAsesor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asesor'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['asesor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtroDomicilio'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['otroDomicilio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaEntrega'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['fechaEntrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HoraInicial'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['horaInicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HoraFinal'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['horaFinal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefonos'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['telefonos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ObservacionesOperador'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['observacionesOperador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EstatusPagare'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['estatusPagare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delivery['User']['name'], array('controller' => 'users', 'action' => 'view', $delivery['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Delivery'), array('action' => 'edit', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Delivery'), array('action' => 'delete', $delivery['Delivery']['id']), array(), __('Are you sure you want to delete # %s?', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
