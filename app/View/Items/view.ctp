<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($item['Item']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Category']['name'], array('controller' => 'categories', 'action' => 'view', $item['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Quotes'); ?></h3>
	<?php if (!empty($item['Quote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Quote'] as $quote): ?>
		<tr>
			<td><?php echo $quote['id']; ?></td>
			<td><?php echo $quote['item_id']; ?></td>
			<td><?php echo $quote['amount']; ?></td>
			<td><?php echo $quote['description']; ?></td>
			<td><?php echo $quote['created']; ?></td>
			<td><?php echo $quote['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quotes', 'action' => 'view', $quote['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotes', 'action' => 'edit', $quote['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quotes', 'action' => 'delete', $quote['id']), null, __('Are you sure you want to delete # %s?', $quote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
