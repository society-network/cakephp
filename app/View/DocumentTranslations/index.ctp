<div class="documentTranslations index">
	<h2><?php echo __('Document Translations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('document_id'); ?></th>
			<th><?php echo $this->Paginator->sort('locale_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($documentTranslations as $documentTranslation): ?>
	<tr>
		<td><?php echo h($documentTranslation['DocumentTranslation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($documentTranslation['Document']['title'], array('controller' => 'documents', 'action' => 'view', $documentTranslation['Document']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentTranslation['Locale']['name'], array('controller' => 'locales', 'action' => 'view', $documentTranslation['Locale']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentTranslation['User']['id'], array('controller' => 'users', 'action' => 'view', $documentTranslation['User']['id'])); ?>
		</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['title']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['summary']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['body']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['created']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['modified']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $documentTranslation['DocumentTranslation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $documentTranslation['DocumentTranslation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $documentTranslation['DocumentTranslation']['id']), null, __('Are you sure you want to delete # %s?', $documentTranslation['DocumentTranslation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Document Translation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locales'), array('controller' => 'locales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locale'), array('controller' => 'locales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Files'), array('controller' => 'document_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document File'), array('controller' => 'document_files', 'action' => 'add')); ?> </li>
	</ul>
</div>
