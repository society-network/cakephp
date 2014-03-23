
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">

			<ul class="list-group">
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('class' => '')); ?> </li>

			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="users view">

			<h2><?php  echo __('User'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User Group'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($user['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Password'); ?></strong></td>
		<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($user['User']['deleted']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Document Translations'); ?></h3>
				
				<?php if (!empty($user['DocumentTranslation'])): ?>
					
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
										foreach ($user['DocumentTranslation'] as $documentTranslation): ?>
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
				
				<?php if (!empty($user['Document'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
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
										foreach ($user['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id']; ?></td>
			<td><?php echo $document['parent_id']; ?></td>
			<td><?php echo $document['user_id']; ?></td>
			<td><?php echo $document['locale_id']; ?></td>
			<td><?php echo $document['category_id']; ?></td>
			<td><?php echo $document['name']; ?></td>
			<td><?php echo $document['summary']; ?></td>
			<td><?php echo $document['body']; ?></td>
			<td><?php echo $document['is_login_required']; ?></td>
			<td><?php echo $document['created']; ?></td>
			<td><?php echo $document['modified']; ?></td>
			<td><?php echo $document['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Document'), array('controller' => 'documents', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
