
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-12">

		<div class="documentTranslations index">
		
			<h2><?php echo __('Document Translations'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('document_id'); ?></th>
							<th><?php echo $this->Paginator->sort('language_id'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('summary'); ?></th>
							<th><?php echo $this->Paginator->sort('body'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th><?php echo $this->Paginator->sort('deleted'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($documentTranslations as $documentTranslation): ?>
	<tr>
		<td><?php echo h($documentTranslation['DocumentTranslation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($documentTranslation['Document']['name'], array('controller' => 'documents', 'action' => 'view', $documentTranslation['Document']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentTranslation['Language']['name'], array('controller' => 'languages', 'action' => 'view', $documentTranslation['Language']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentTranslation['User']['name'], array('controller' => 'users', 'action' => 'view', $documentTranslation['User']['id'])); ?>
		</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['name']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['summary']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['body']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['created']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['modified']); ?>&nbsp;</td>
		<td><?php echo h($documentTranslation['DocumentTranslation']['deleted']); ?>&nbsp;</td>
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