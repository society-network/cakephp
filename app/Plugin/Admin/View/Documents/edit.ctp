
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">

		<div class="actions">
            <h4><?php echo __('Actions'); ?></h4>
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Document.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Document.id'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->

		</div><!-- /.actions -->

        <div class="actions">
            <h4><?php echo __('Translations'); ?></h4>
            <ul class="list-group">
                <?php foreach ($languages as $language_id=>$language_name): ?>
                    <?php if ($language_id == $this->data['Document']['language_id']): ?>
                        <li class="list-group-item"><?php echo $language_name; ?></li>
                    <?php elseif (in_array($language_id, array_keys($available_languages))): ?>
                        <li class="list-group-item"><?php echo $this->Html->link($language_name, array('controller' => 'document_translations', 'action' => 'edit', $available_languages[$language_id])); ?> </li>
                    <?php else: ?>
                        <li class="list-group-item"><?php echo $this->Html->link($language_name, array('controller' => 'document_translations', 'action' => 'add', 'document_id' => $this->data['Document']['id'], 'language_id' => $language_id)); ?> </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

        <div class="actions">
            <?php echo $this->element('single_upload_form'); ?>
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
						<?php //echo $this->Form->input('user_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('language_id', array('class' => 'form-control', 'label' => __('Language'))); ?>
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

        <div class="documentFiles list">
            <h2><?php echo __('Document Files'); ?></h2>
            <?php echo $this->element('list_files', array('documentFiles' > $documentFiles)); ?>
        </div>
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->