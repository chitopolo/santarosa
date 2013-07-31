<div class="addresses form">
<?php echo $this->Form->create('Address'); ?>
	<fieldset>
		<legend><?php echo __('Add Address'); ?></legend>
	<?php
		echo $this->Form->input('country');
		echo $this->Form->input('city');
		echo $this->Form->input('sona');
		echo $this->Form->input('area');
		echo $this->Form->input('locality');
		echo $this->Form->input('locality1');
		echo $this->Form->input('route');
		echo $this->Form->input('latitude');
		echo $this->Form->input('length');
		echo $this->Form->input('branch_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
