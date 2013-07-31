<div class="requirements view">
<h2><?php  echo __('Requirement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requirement['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $requirement['Branch']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charge'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surnames'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['surnames']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Names'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['names']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellular'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['cellular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curriculum'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['curriculum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requirement'), array('action' => 'edit', $requirement['Requirement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requirement'), array('action' => 'delete', $requirement['Requirement']['id']), null, __('Are you sure you want to delete # %s?', $requirement['Requirement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
