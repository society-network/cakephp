<div class="documentTranslations view">
<h2><?php echo __('Document Translation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($documentTranslation['DocumentTranslation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentTranslation['Document']['name'], array('controller' => 'documents', 'action' => 'view', $documentTranslation['Document']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locale'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentTranslation['Locale']['name'], array('controller' => 'locales', 'action' => 'view', $documentTranslation['Locale']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentTranslation['User']['name'], array('controller' => 'users', 'action' => 'view', $documentTranslation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($documentTranslation['DocumentTranslation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($documentTranslation['DocumentTranslation']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($documentTranslation['DocumentTranslation']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($documentTranslation['DocumentTranslation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($documentTranslation['DocumentTranslation']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($documentTranslation['DocumentTranslation']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document Translation'), array('action' => 'edit', $documentTranslation['DocumentTranslation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document Translation'), array('action' => 'delete', $documentTranslation['DocumentTranslation']['id']), null, __('Are you sure you want to delete # %s?', $documentTranslation['DocumentTranslation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Translations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Translation'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Document Files'); ?></h3>
	<?php if (!empty($documentTranslation['DocumentFile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Document Id'); ?></th>
		<th><?php echo __('Document Translation Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Is A Link'); ?></th>
		<th><?php echo __('Is Login Required'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($documentTranslation['DocumentFile'] as $documentFile): ?>
		<tr>
			<td><?php echo $documentFile['id']; ?></td>
			<td><?php echo $documentFile['document_id']; ?></td>
			<td><?php echo $documentFile['document_translation_id']; ?></td>
			<td><?php echo $documentFile['name']; ?></td>
			<td><?php echo $documentFile['type']; ?></td>
			<td><?php echo $documentFile['path']; ?></td>
			<td><?php echo $documentFile['is_a_link']; ?></td>
			<td><?php echo $documentFile['is_login_required']; ?></td>
			<td><?php echo $documentFile['created']; ?></td>
			<td><?php echo $documentFile['modified']; ?></td>
			<td><?php echo $documentFile['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'document_files', 'action' => 'view', $documentFile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'document_files', 'action' => 'edit', $documentFile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'document_files', 'action' => 'delete', $documentFile['id']), null, __('Are you sure you want to delete # %s?', $documentFile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document File'), array('controller' => 'document_files', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
