<div class="documentFiles form">
<?php echo $this->Form->create('DocumentFile'); ?>
	<fieldset>
		<legend><?php echo __('Edit Document File'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('document_id');
		echo $this->Form->input('document_translation_id');
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('path');
		echo $this->Form->input('is_a_link');
		echo $this->Form->input('is_login_required');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DocumentFile.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DocumentFile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Document Files'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add')); ?> </li>
	</ul>
</div>
