<div class="imagesRecipes view">
<h2><?php  echo __('Images Recipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagesRecipe['ImagesRecipe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($imagesRecipe['ImagesRecipe']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($imagesRecipe['ImagesRecipe']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($imagesRecipe['ImagesRecipe']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesRecipe['Recipe']['title'], array('controller' => 'recipes', 'action' => 'view', $imagesRecipe['Recipe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Images Recipe'), array('action' => 'edit', $imagesRecipe['ImagesRecipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Images Recipe'), array('action' => 'delete', $imagesRecipe['ImagesRecipe']['id']), null, __('Are you sure you want to delete # %s?', $imagesRecipe['ImagesRecipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Recipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Recipe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
