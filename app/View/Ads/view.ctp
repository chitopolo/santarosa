<div class="ads view">
<h2><?php  echo __('Ad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($ad['Ad']['dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ad'), array('action' => 'edit', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ad'), array('action' => 'delete', $ad['Ad']['id']), null, __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add')); ?> </li>
	</ul>
</div>
