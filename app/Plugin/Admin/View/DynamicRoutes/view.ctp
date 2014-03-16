
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">

			<ul class="list-group">
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Dynamic Route'), array('action' => 'edit', $dynamicRoute['DynamicRoute']['slug']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Dynamic Route'), array('action' => 'delete', $dynamicRoute['DynamicRoute']['slug']), array('class' => ''), __('Are you sure you want to delete # %s?', $dynamicRoute['DynamicRoute']['slug'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Dynamic Routes'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Dynamic Route'), array('action' => 'add'), array('class' => '')); ?> </li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="dynamicRoutes view">

			<h2><?php  echo __('Dynamic Route'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Slug'); ?></strong></td>
		<td>
			<?php echo h($dynamicRoute['DynamicRoute']['slug']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Spec'); ?></strong></td>
		<td>
			<?php echo h($dynamicRoute['DynamicRoute']['spec']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($dynamicRoute['DynamicRoute']['active']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
