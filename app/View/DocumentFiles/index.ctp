<div class="documentFiles index">
	<h2><?php echo __('Document Files'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('document_id'); ?></th>
			<th><?php echo $this->Paginator->sort('document_translation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('is_a_link'); ?></th>
			<th><?php echo $this->Paginator->sort('is_login_required'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($documentFiles as $documentFile): ?>
	<tr>
		<td><?php echo h($documentFile['DocumentFile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($documentFile['Document']['title'], array('controller' => 'documents', 'action' => 'view', $documentFile['Document']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentFile['DocumentTranslation']['title'], array('controller' => 'document_translations', 'action' => 'view', $documentFile['DocumentTranslation']['id'])); ?>
		</td>
		<td><?php echo h($documentFile['DocumentFile']['name']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['type']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['path']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['is_a_link']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['is_login_required']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['created']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['modified']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $documentFile['DocumentFile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $documentFile['DocumentFile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $documentFile['DocumentFile']['id']), null, __('Are you sure you want to delete # %s?', $documentFile['DocumentFile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Document File'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add')); ?> </li>
	</ul>
</div>
