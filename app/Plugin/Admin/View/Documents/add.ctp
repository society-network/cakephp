
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">
            <h4><?php echo __('Actions'); ?></h4>
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?></li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Document'); ?></h2>

		<div class="documents form">
		
			<?php echo $this->Form->create('Document', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('language_id', array('selected' => isset($my_parent['language_id'])?$my_parent['language_id']:null, 'empty' => true, 'class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('category_id', array('selected' => isset($my_parent['category_id'])?$my_parent['category_id']:null, 'empty' => true, 'class' => 'form-control')); ?>
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

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->