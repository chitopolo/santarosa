<div class="supermarkets form">
<?php echo $this->Form->create('Supermarket',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Supermarket'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Supermarket.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Supermarket.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Supermarkets'), array('action' => 'index')); ?></li>
	</ul>
</div>
