<div class="supermarkets view">
<h2><?php  echo __('Supermarket'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supermarket['Supermarket']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($supermarket['Supermarket']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($supermarket['Supermarket']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($supermarket['Supermarket']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($supermarket['Supermarket']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supermarket'), array('action' => 'edit', $supermarket['Supermarket']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supermarket'), array('action' => 'delete', $supermarket['Supermarket']['id']), null, __('Are you sure you want to delete # %s?', $supermarket['Supermarket']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supermarkets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supermarket'), array('action' => 'add')); ?> </li>
	</ul>
</div>
