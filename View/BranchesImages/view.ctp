<div class="branchesImages view">
<h2><?php  echo __('Branches Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($branchesImage['BranchesImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($branchesImage['BranchesImage']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($branchesImage['BranchesImage']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descipcion'); ?></dt>
		<dd>
			<?php echo h($branchesImage['BranchesImage']['descipcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($branchesImage['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $branchesImage['Branch']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Branches Image'), array('action' => 'edit', $branchesImage['BranchesImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Branches Image'), array('action' => 'delete', $branchesImage['BranchesImage']['id']), null, __('Are you sure you want to delete # %s?', $branchesImage['BranchesImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branches Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
