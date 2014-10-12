<div class="deliveries index">
	<h2><?php echo __('Deliveries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('folio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('referencia'); ?></th>
			<th><?php echo $this->Paginator->sort('estatus'); ?></th>
			<th><?php echo $this->Paginator->sort('comentarioAsesor'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apaterno'); ?></th>
			<th><?php echo $this->Paginator->sort('amaterno'); ?></th>
			<th><?php echo $this->Paginator->sort('talonarios'); ?></th>
			<th><?php echo $this->Paginator->sort('asignacion'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('entreCalles'); ?></th>
			<th><?php echo $this->Paginator->sort('colonia'); ?></th>
			<th><?php echo $this->Paginator->sort('codigoPostal'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('zonaAsesor'); ?></th>
			<th><?php echo $this->Paginator->sort('asesor'); ?></th>
			<th><?php echo $this->Paginator->sort('otroDomicilio'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaEntrega'); ?></th>
			<th><?php echo $this->Paginator->sort('horaInicial'); ?></th>
			<th><?php echo $this->Paginator->sort('horaFinal'); ?></th>
			<th><?php echo $this->Paginator->sort('telefonos'); ?></th>
			<th><?php echo $this->Paginator->sort('observacionesOperador'); ?></th>
			<th><?php echo $this->Paginator->sort('estatusPagare'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($deliveries as $delivery): ?>
	<tr>
		<td><?php echo h($delivery['Delivery']['id']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['year']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['folio']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['referencia']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['estatus']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['comentarioAsesor']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['apaterno']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['amaterno']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['talonarios']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['asignacion']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['entreCalles']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['colonia']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['codigoPostal']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['ciudad']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['zonaAsesor']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['asesor']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['otroDomicilio']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['fechaEntrega']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['horaInicial']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['horaFinal']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['telefonos']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['observacionesOperador']); ?>&nbsp;</td>
		<td><?php echo h($delivery['Delivery']['estatusPagare']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($delivery['User']['name'], array('controller' => 'users', 'action' => 'view', $delivery['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $delivery['Delivery']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $delivery['Delivery']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $delivery['Delivery']['id']), array(), __('Are you sure you want to delete # %s?', $delivery['Delivery']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Delivery'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
