<div class="branches view">
<h2><?php  echo __('Branch'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($branch['Company']['name'], array('controller' => 'companies', 'action' => 'view', $branch['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['contact']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Branch'), array('action' => 'edit', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Branch'), array('action' => 'delete', $branch['Branch']['id']), null, __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Addresses'); ?></h3>
	<?php if (!empty($branch['Address'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Sona'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Locality'); ?></th>
		<th><?php echo __('Locality1'); ?></th>
		<th><?php echo __('Route'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Branch Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($branch['Address'] as $address): ?>
		<tr>
			<td><?php echo $address['id']; ?></td>
			<td><?php echo $address['country']; ?></td>
			<td><?php echo $address['city']; ?></td>
			<td><?php echo $address['sona']; ?></td>
			<td><?php echo $address['area']; ?></td>
			<td><?php echo $address['locality']; ?></td>
			<td><?php echo $address['locality1']; ?></td>
			<td><?php echo $address['route']; ?></td>
			<td><?php echo $address['latitude']; ?></td>
			<td><?php echo $address['length']; ?></td>
			<td><?php echo $address['branch_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'addresses', 'action' => 'view', $address['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'addresses', 'action' => 'edit', $address['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'addresses', 'action' => 'delete', $address['id']), null, __('Are you sure you want to delete # %s?', $address['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Requirements'); ?></h3>
	<?php if (!empty($branch['Requirement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Branch Id'); ?></th>
		<th><?php echo __('Charge'); ?></th>
		<th><?php echo __('Surnames'); ?></th>
		<th><?php echo __('Names'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Cellular'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Curriculum'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($branch['Requirement'] as $requirement): ?>
		<tr>
			<td><?php echo $requirement['id']; ?></td>
			<td><?php echo $requirement['branch_id']; ?></td>
			<td><?php echo $requirement['charge']; ?></td>
			<td><?php echo $requirement['surnames']; ?></td>
			<td><?php echo $requirement['names']; ?></td>
			<td><?php echo $requirement['date_of_birth']; ?></td>
			<td><?php echo $requirement['sex']; ?></td>
			<td><?php echo $requirement['address']; ?></td>
			<td><?php echo $requirement['phone']; ?></td>
			<td><?php echo $requirement['cellular']; ?></td>
			<td><?php echo $requirement['email']; ?></td>
			<td><?php echo $requirement['message']; ?></td>
			<td><?php echo $requirement['curriculum']; ?></td>
			<td><?php echo $requirement['created']; ?></td>
			<td><?php echo $requirement['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requirements', 'action' => 'view', $requirement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requirements', 'action' => 'edit', $requirement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requirements', 'action' => 'delete', $requirement['id']), null, __('Are you sure you want to delete # %s?', $requirement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
