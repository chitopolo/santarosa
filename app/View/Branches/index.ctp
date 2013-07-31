<div class="branches index">
	<h2><?php echo __('Branches'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($branches as $branch): ?>
	<tr>
		<td><?php echo h($branch['Branch']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($branch['Company']['name'], array('controller' => 'companies', 'action' => 'view', $branch['Company']['id'])); ?>
		</td>
		<td><?php echo h($branch['Branch']['phone']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['fax']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['contact']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $branch['Branch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $branch['Branch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $branch['Branch']['id']), null, __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Branch'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
