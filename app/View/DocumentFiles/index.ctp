
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-12">

		<div class="documentFiles index">
		
			<h2><?php echo __('Document Files'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th><?php echo $this->Paginator->sort('document_id'); ?></th>
							<th><?php echo $this->Paginator->sort('document_translation_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('type'); ?></th>
							<th><?php echo $this->Paginator->sort('path'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th><?php echo $this->Paginator->sort('deleted'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($documentFiles as $documentFile): ?>
	<tr>
		<td><?php echo h($documentFile['DocumentFile']['id']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($documentFile['User']['name'], array('controller' => 'users', 'action' => 'view', $documentFile['User']['id'])); ?>
        </td>
		<td>
			<?php echo $this->Html->link($documentFile['Document']['name'], array('controller' => 'documents', 'action' => 'view', $documentFile['Document']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentFile['DocumentTranslation']['name'], array('controller' => 'document_translations', 'action' => 'view', $documentFile['DocumentTranslation']['id'])); ?>
		</td>
		<td><?php echo h($documentFile['DocumentFile']['name']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['type']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['path']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['created']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['modified']); ?>&nbsp;</td>
		<td><?php echo h($documentFile['DocumentFile']['deleted']); ?>&nbsp;</td>
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