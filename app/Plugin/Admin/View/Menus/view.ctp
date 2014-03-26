
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">

			<ul class="list-group">
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Menu'), array('action' => 'edit', $menu['Menu']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Menus'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Menu'), array('action' => 'add'), array('class' => '')); ?> </li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="menus view">

			<h2><?php  echo __('Menu'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parent Id'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['parent_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Lft'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['lft']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rght'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['rght']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Language Id'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['language_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Url'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['url']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['active']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Deleted'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['deleted']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
