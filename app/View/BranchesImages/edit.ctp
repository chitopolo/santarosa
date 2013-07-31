<div class="branchesImages form">
<?php echo $this->Form->create('BranchesImage',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Branches Image'); ?></legend>
	<?php
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('dir');
		echo $this->Form->input('descipcion');
		echo $this->Form->input('branch_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BranchesImage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BranchesImage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Branches Images'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
