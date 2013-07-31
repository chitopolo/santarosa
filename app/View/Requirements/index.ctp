<div class="requirements index">
	<h2><?php echo __('Requirements'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_id'); ?></th>
			<th><?php echo $this->Paginator->sort('charge'); ?></th>
			<th><?php echo $this->Paginator->sort('surnames'); ?></th>
			<th><?php echo $this->Paginator->sort('names'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('cellular'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('curriculum'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($requirements as $requirement): ?>
	<tr>
		<td><?php echo h($requirement['Requirement']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requirement['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $requirement['Branch']['id'])); ?>
		</td>
		<td><?php echo h($requirement['Requirement']['charge']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['surnames']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['names']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['sex']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['address']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['phone']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['cellular']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['email']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['message']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['curriculum']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['created']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $requirement['Requirement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $requirement['Requirement']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $requirement['Requirement']['id']), null, __('Are you sure you want to delete # %s?', $requirement['Requirement']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Requirement'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
