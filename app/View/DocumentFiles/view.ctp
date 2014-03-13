<div class="documentFiles view">
<h2><?php echo __('Document File'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentFile['Document']['title'], array('controller' => 'documents', 'action' => 'view', $documentFile['Document']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Translation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentFile['DocumentTranslation']['title'], array('controller' => 'document_translations', 'action' => 'view', $documentFile['DocumentTranslation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is A Link'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['is_a_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Login Required'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['is_login_required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($documentFile['DocumentFile']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document File'), array('action' => 'edit', $documentFile['DocumentFile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document File'), array('action' => 'delete', $documentFile['DocumentFile']['id']), null, __('Are you sure you want to delete # %s?', $documentFile['DocumentFile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Files'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document File'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add')); ?> </li>
	</ul>
</div>
