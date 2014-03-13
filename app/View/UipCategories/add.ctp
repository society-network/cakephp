<div class="uipCategories form">
<?php echo $this->Form->create('UipCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Uip Category'); ?></legend>
	<?php
		echo $this->Form->input('parent_id');
		echo $this->Form->input('name');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Uip Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Uip Categories'), array('controller' => 'uip_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Uip Category'), array('controller' => 'uip_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
