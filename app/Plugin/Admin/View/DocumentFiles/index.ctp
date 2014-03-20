
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">
            <h4><?php echo __('Actions'); ?></h4>
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Document File'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Document Files'), array('controller' => 'document_files', 'action' => 'index'), array('class' => '')); ?></li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="documentFiles index">
		
			<h2><?php echo __('Document Files'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<!--th><?php //echo $this->Paginator->sort('user_id'); ?></th-->
							<!--th><?php //echo $this->Paginator->sort('document_id'); ?></th-->
							<!--th><?php //echo $this->Paginator->sort('document_translation_id'); ?></th-->
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('type'); ?></th>
							<!--th><?php //echo $this->Paginator->sort('path'); ?></th-->
							<th><?php echo $this->Paginator->sort('is_login_required'); ?></th>
							<!--th><?php //echo $this->Paginator->sort('created'); ?></th-->
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<!--th><?php //echo $this->Paginator->sort('deleted'); ?></th-->
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($documentFiles as $documentFile): ?>
	<tr>
		<td><?php echo h($documentFile['DocumentFile']['id']); ?>&nbsp;</td>
        <!--td>
            <?php //echo $this->Html->link($documentFile['User']['name'], array('controller' => 'users', 'action' => 'view', $documentFile['User']['id'])); ?>
        </td-->
		<!--td>
			<?php //echo $this->Html->link($documentFile['Document']['name'], array('controller' => 'documents', 'action' => 'view', $documentFile['Document']['id'])); ?>
		</td-->
		<!--td>
			<?php //echo $this->Html->link($documentFile['DocumentTranslation']['name'], array('controller' => 'document_translations', 'action' => 'view', $documentFile['DocumentTranslation']['id'])); ?>
		</td-->
		<td><?php echo h($documentFile['DocumentFile']['name']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['type']); ?>&nbsp;</td>
		<!--td><?php //echo h($documentFile['DocumentFile']['path']); ?>&nbsp;</td-->
		<td><?php echo h($documentFile['DocumentFile']['is_login_required']); ?>&nbsp;</td>
		<!--td><?php //echo h($documentFile['DocumentFile']['created']); ?>&nbsp;</td-->
		<td><?php echo h($documentFile['DocumentFile']['modified']); ?>&nbsp;</td>
		<!--td><?php //echo h($documentFile['DocumentFile']['deleted']); ?>&nbsp;</td-->
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $documentFile['DocumentFile']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $documentFile['DocumentFile']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $documentFile['DocumentFile']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $documentFile['DocumentFile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->