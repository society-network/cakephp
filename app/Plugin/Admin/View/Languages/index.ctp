
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">
            <h4><?php echo __('Actions'); ?></h4>
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Language'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index'), array('class' => '')); ?></li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="languages index">
		
			<h2><?php echo __('Languages'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('code'); ?></th>
							<!--th><?php //echo $this->Paginator->sort('created'); ?></th-->
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<!--th><?php //echo $this->Paginator->sort('deleted'); ?></th-->
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($languages as $language): ?>
	<tr>
		<td><?php echo h($language['Language']['id']); ?>&nbsp;</td>
		<td><?php echo h($language['Language']['name']); ?>&nbsp;</td>
		<td><?php echo h($language['Language']['code']); ?>&nbsp;</td>
		<!--td><?php //echo h($language['Language']['created']); ?>&nbsp;</td-->
		<td><?php echo h($language['Language']['modified']); ?>&nbsp;</td>
		<!--td><?php //echo h($language['Language']['deleted']); ?>&nbsp;</td-->
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $language['Language']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $language['Language']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $language['Language']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $language['Language']['id'])); ?>
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