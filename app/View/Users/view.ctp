<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($user['User']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<?php  if($current_user['id'] == $user['User']['id']): ?>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<?php endif; ?>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deliveries'); ?></h3>
	<?php if (!empty($user['Delivery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Folio'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Referencia'); ?></th>
		<th><?php echo __('Estatus'); ?></th>
		<th><?php echo __('ComentarioAsesor'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apaterno'); ?></th>
		<th><?php echo __('Amaterno'); ?></th>
		<th><?php echo __('Talonarios'); ?></th>
		<th><?php echo __('Asignacion'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('EntreCalles'); ?></th>
		<th><?php echo __('Colonia'); ?></th>
		<th><?php echo __('CodigoPostal'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('ZonaAsesor'); ?></th>
		<th><?php echo __('Asesor'); ?></th>
		<th><?php echo __('OtroDomicilio'); ?></th>
		<th><?php echo __('FechaEntrega'); ?></th>
		<th><?php echo __('HoraInicial'); ?></th>
		<th><?php echo __('HoraFinal'); ?></th>
		<th><?php echo __('Telefonos'); ?></th>
		<th><?php echo __('ObservacionesOperador'); ?></th>
		<th><?php echo __('EstatusPagare'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Delivery'] as $delivery): ?>
		<tr>
			<td><?php echo $delivery['id']; ?></td>
			<td><?php echo $delivery['year']; ?></td>
			<td><?php echo $delivery['folio']; ?></td>
			<td><?php echo $delivery['fecha']; ?></td>
			<td><?php echo $delivery['referencia']; ?></td>
			<td><?php echo $delivery['estatus']; ?></td>
			<td><?php echo $delivery['comentarioAsesor']; ?></td>
			<td><?php echo $delivery['nombre']; ?></td>
			<td><?php echo $delivery['apaterno']; ?></td>
			<td><?php echo $delivery['amaterno']; ?></td>
			<td><?php echo $delivery['talonarios']; ?></td>
			<td><?php echo $delivery['asignacion']; ?></td>
			<td><?php echo $delivery['direccion']; ?></td>
			<td><?php echo $delivery['entreCalles']; ?></td>
			<td><?php echo $delivery['colonia']; ?></td>
			<td><?php echo $delivery['codigoPostal']; ?></td>
			<td><?php echo $delivery['ciudad']; ?></td>
			<td><?php echo $delivery['zonaAsesor']; ?></td>
			<td><?php echo $delivery['asesor']; ?></td>
			<td><?php echo $delivery['otroDomicilio']; ?></td>
			<td><?php echo $delivery['fechaEntrega']; ?></td>
			<td><?php echo $delivery['horaInicial']; ?></td>
			<td><?php echo $delivery['horaFinal']; ?></td>
			<td><?php echo $delivery['telefonos']; ?></td>
			<td><?php echo $delivery['observacionesOperador']; ?></td>
			<td><?php echo $delivery['estatusPagare']; ?></td>
			<td><?php echo $delivery['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deliveries', 'action' => 'view', $delivery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deliveries', 'action' => 'edit', $delivery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deliveries', 'action' => 'delete', $delivery['id']), array(), __('Are you sure you want to delete # %s?', $delivery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
