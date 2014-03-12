<div class="locales index">
	<h2><?php echo __('Locales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locales as $locale): ?>
	<tr>
		<td><?php echo h($locale['Locale']['id']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['name']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['code']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['created']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['modified']); ?>&nbsp;</td>
		<td><?php echo h($locale['Locale']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locale['Locale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locale['Locale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locale['Locale']['id']), null, __('Are you sure you want to delete # %s?', $locale['Locale']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Locale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
