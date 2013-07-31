<div class="consultations form">
<?php echo $this->Form->create('Consultation'); ?>
	<fieldset>
		<legend><?php echo __('Add Consultation'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('company');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Consultations'), array('action' => 'index')); ?></li>
	</ul>
</div>
