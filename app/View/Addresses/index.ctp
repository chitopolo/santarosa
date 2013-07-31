<div class="addresses index">
	<h2><?php echo __('Addresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('sona'); ?></th>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('locality'); ?></th>
			<th><?php echo $this->Paginator->sort('locality1'); ?></th>
			<th><?php echo $this->Paginator->sort('route'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('length'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($addresses as $address): ?>
	<tr>
		<td><?php echo h($address['Address']['id']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['country']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['city']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['sona']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['area']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['locality']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['locality1']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['route']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['length']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($address['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $address['Branch']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $address['Address']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $address['Address']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $address['Address']['id']), null, __('Are you sure you want to delete # %s?', $address['Address']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Address'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
