
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Document File'), array('action' => 'edit', $documentFile['DocumentFile']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Document File'), array('action' => 'delete', $documentFile['DocumentFile']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $documentFile['DocumentFile']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Document Files'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document File'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="documentFiles view">

			<h2><?php  echo __('Document File'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
    <td>
        <?php echo $this->Html->link($documentFile['User']['name'], array('controller' => 'users', 'action' => 'view', $documentFile['User']['id']), array('class' => '')); ?>
        &nbsp;
    </td>
</tr><tr>		<td><strong><?php echo __('Document'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($documentFile['Document']['name'], array('controller' => 'documents', 'action' => 'view', $documentFile['Document']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Document Translation'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($documentFile['DocumentTranslation']['name'], array('controller' => 'document_translations', 'action' => 'view', $documentFile['DocumentTranslation']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Path'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['path']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Is A Link'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['is_a_link']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($documentFile['DocumentFile']['deleted']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
