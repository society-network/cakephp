
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">

			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Document.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Document.id'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Document Files'), array('controller' => 'document_files', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Document File'), array('controller' => 'document_files', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Document Translations'), array('controller' => 'document_translations', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Document Translation'), array('controller' => 'document_translations', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Edit Document'); ?></h2>

		<div class="documents form">
		
			<?php echo $this->Form->create('Document', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('user_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('locale_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('category_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('summary', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('body', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('cover_img', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('thumbnail', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('is_login_required', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
                        <?php //echo $this->Form->input('deleted', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->hidden('DynamicRoute.id', array('value' => isset($dynamicRoutes['DynamicRoute']['id'])?$dynamicRoutes['DynamicRoute']['id']:null)); ?>
                        <?php echo $this->Form->input('DynamicRoute.slug', array('class' => 'form-control', 'label' => 'Url Slug', 'value' => isset($dynamicRoutes['DynamicRoute']['slug'])?$dynamicRoutes['DynamicRoute']['slug']:null)); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('DynamicRoute.active', array('class' => 'form-control', 'label' => 'Enable Url Slug', 'checked' => isset($dynamicRoutes['DynamicRoute']['active'])?$dynamicRoutes['DynamicRoute']['active']:null)); ?>
                    </div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->