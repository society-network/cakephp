
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">

			<ul class="list-group">
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Document Translation'), array('action' => 'edit', $documentTranslation['DocumentTranslation']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Document Translation'), array('action' => 'delete', $documentTranslation['DocumentTranslation']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $documentTranslation['DocumentTranslation']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Document Translations'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document Translation'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Document Files'), array('controller' => 'document_files', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document File'), array('controller' => 'document_files', 'action' => 'add'), array('class' => '')); ?> </li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="documentTranslations view">

			<h2><?php  echo __('Document Translation'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($documentTranslation['DocumentTranslation']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Document'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($documentTranslation['Document']['name'], array('controller' => 'documents', 'action' => 'view', $documentTranslation['Document']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Language'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($documentTranslation['Language']['name'], array('controller' => 'languages', 'action' => 'view', $documentTranslation['Language']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($documentTranslation['User']['name'], array('controller' => 'users', 'action' => 'view', $documentTranslation['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($documentTranslation['DocumentTranslation']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Summary'); ?></strong></td>
		<td>
			<?php echo h($documentTranslation['DocumentTranslation']['summary']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Body'); ?></strong></td>
		<td>
			<?php echo h($documentTranslation['DocumentTranslation']['body']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cover Img'); ?></strong></td>
        <td>
            <?php echo h($document['Document']['cover_img']); ?>
            &nbsp;
        </td>
 </tr><tr>		<td><strong><?php echo __('Thumbnail'); ?></strong></td>
        <td>
            <?php echo h($document['Document']['thumbnail']); ?>
            &nbsp;
        </td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($documentTranslation['DocumentTranslation']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($documentTranslation['DocumentTranslation']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($documentTranslation['DocumentTranslation']['deleted']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Document Files'); ?></h3>
				
				<?php if (!empty($documentTranslation['DocumentFile'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
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
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($documentTranslation['DocumentFile'] as $documentFile): ?>
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'document_files', 'action' => 'view', $documentFile['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'document_files', 'action' => 'edit', $documentFile['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'document_files', 'action' => 'delete', $documentFile['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $documentFile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Document File'), array('controller' => 'document_files', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
