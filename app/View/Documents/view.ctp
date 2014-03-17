
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Document'), array('action' => 'edit', $document['Document']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Document'), array('action' => 'delete', $document['Document']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Parent Document'), array('controller' => 'documents', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Locales'), array('controller' => 'locales', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Locale'), array('controller' => 'locales', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Document Files'), array('controller' => 'document_files', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document File'), array('controller' => 'document_files', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="documents view">

			<h2><?php  echo __('Document'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parent Document'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['ParentDocument']['name'], array('controller' => 'documents', 'action' => 'view', $document['ParentDocument']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['User']['name'], array('controller' => 'users', 'action' => 'view', $document['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Locale'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['Locale']['name'], array('controller' => 'locales', 'action' => 'view', $document['Locale']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Category'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($document['Category']['name'], array('controller' => 'categories', 'action' => 'view', $document['Category']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Summary'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['summary']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Body'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['body']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Is Login Required'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['is_login_required']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($document['Document']['deleted']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Document Files'); ?></h3>
				
				<?php if (!empty($document['DocumentFile'])): ?>
					
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
										foreach ($document['DocumentFile'] as $documentFile): ?>
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

					
			<div class="related">

				<h3><?php echo __('Related Document Translations'); ?></h3>
				
				<?php if (!empty($document['DocumentTranslation'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Document Id'); ?></th>
		<th><?php echo __('Locale Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($document['DocumentTranslation'] as $documentTranslation): ?>
		<tr>
			<td><?php echo $documentTranslation['id']; ?></td>
			<td><?php echo $documentTranslation['document_id']; ?></td>
			<td><?php echo $documentTranslation['locale_id']; ?></td>
			<td><?php echo $documentTranslation['user_id']; ?></td>
			<td><?php echo $documentTranslation['name']; ?></td>
			<td><?php echo $documentTranslation['summary']; ?></td>
			<td><?php echo $documentTranslation['body']; ?></td>
			<td><?php echo $documentTranslation['created']; ?></td>
			<td><?php echo $documentTranslation['modified']; ?></td>
			<td><?php echo $documentTranslation['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'document_translations', 'action' => 'view', $documentTranslation['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'document_translations', 'action' => 'edit', $documentTranslation['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'document_translations', 'action' => 'delete', $documentTranslation['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $documentTranslation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Documents'); ?></h3>
				
				<?php if (!empty($document['ChildDocument'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Locale Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Body'); ?></th>
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
										foreach ($document['ChildDocument'] as $childDocument): ?>
		<tr>
			<td><?php echo $childDocument['id']; ?></td>
			<td><?php echo $childDocument['user_id']; ?></td>
			<td><?php echo $childDocument['locale_id']; ?></td>
			<td><?php echo $childDocument['category_id']; ?></td>
			<td><?php echo $childDocument['name']; ?></td>
			<td><?php echo $childDocument['summary']; ?></td>
			<td><?php echo $childDocument['body']; ?></td>
			<td><?php echo $childDocument['is_login_required']; ?></td>
			<td><?php echo $childDocument['created']; ?></td>
			<td><?php echo $childDocument['modified']; ?></td>
			<td><?php echo $childDocument['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $childDocument['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $childDocument['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $childDocument['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $childDocument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Child Document'), array('controller' => 'documents', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
