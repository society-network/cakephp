<div class="uipCategories view">
<h2><?php echo __('Uip Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uipCategory['UipCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Uip Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($uipCategory['ParentUipCategory']['name'], array('controller' => 'uip_categories', 'action' => 'view', $uipCategory['ParentUipCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($uipCategory['UipCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($uipCategory['UipCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($uipCategory['UipCategory']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($uipCategory['UipCategory']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uip Category'), array('action' => 'edit', $uipCategory['UipCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uip Category'), array('action' => 'delete', $uipCategory['UipCategory']['id']), null, __('Are you sure you want to delete # %s?', $uipCategory['UipCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uip Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uip Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uip Categories'), array('controller' => 'uip_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Uip Category'), array('controller' => 'uip_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Uip Categories'); ?></h3>
	<?php if (!empty($uipCategory['ChildUipCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($uipCategory['ChildUipCategory'] as $childUipCategory): ?>
		<tr>
			<td><?php echo $childUipCategory['id']; ?></td>
			<td><?php echo $childUipCategory['parent_id']; ?></td>
			<td><?php echo $childUipCategory['name']; ?></td>
			<td><?php echo $childUipCategory['created']; ?></td>
			<td><?php echo $childUipCategory['modified']; ?></td>
			<td><?php echo $childUipCategory['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'uip_categories', 'action' => 'view', $childUipCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'uip_categories', 'action' => 'edit', $childUipCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'uip_categories', 'action' => 'delete', $childUipCategory['id']), null, __('Are you sure you want to delete # %s?', $childUipCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Uip Category'), array('controller' => 'uip_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
