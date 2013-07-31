<div class="imagesItems view">
<h2><?php  echo __('Images Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagesItem['ImagesItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($imagesItem['ImagesItem']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($imagesItem['ImagesItem']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($imagesItem['ImagesItem']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $imagesItem['Item']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Images Item'), array('action' => 'edit', $imagesItem['ImagesItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Images Item'), array('action' => 'delete', $imagesItem['ImagesItem']['id']), null, __('Are you sure you want to delete # %s?', $imagesItem['ImagesItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
