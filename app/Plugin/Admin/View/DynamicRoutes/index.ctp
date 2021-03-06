
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">
            <h4><?php echo __('Actions'); ?></h4>
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New URL Routing'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index'), array('class' => '')); ?></li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="dynamicRoutes index">
		
			<h2><?php echo __('URL Routing'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('document_id'); ?></th>
							<th><?php echo $this->Paginator->sort('slug', __('Url')); ?></th>
							<!--th><?php //echo $this->Paginator->sort('spec'); ?></th-->
							<th><?php echo $this->Paginator->sort('active'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($dynamicRoutes as $dynamicRoute): ?>
	<tr>
		<td><?php echo $this->Html->link($dynamicRoute['Document']['name'], array('controller' => 'documents', 'action' => 'edit', $dynamicRoute['Document']['id'])); ?></td>
		<td><?php echo h($dynamicRoute['DynamicRoute']['slug']); ?>&nbsp;</td>
		<!--td><?php //echo h($dynamicRoute['DynamicRoute']['spec']); ?>&nbsp;</td-->
		<td><?php echo h(empty($dynamicRoute['DynamicRoute']['active'])?'No':'Yes'); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dynamicRoute['DynamicRoute']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dynamicRoute['DynamicRoute']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $dynamicRoute['DynamicRoute']['slug'])); ?>
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