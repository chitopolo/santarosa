<div class="consultations view">
<h2><?php  echo __('Consultation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consultation'), array('action' => 'edit', $consultation['Consultation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consultation'), array('action' => 'delete', $consultation['Consultation']['id']), null, __('Are you sure you want to delete # %s?', $consultation['Consultation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consultation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
