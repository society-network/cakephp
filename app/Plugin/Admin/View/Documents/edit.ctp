
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
                <?php foreach ($locales as $locale_id=>$locale_name): ?>
                    <?php if ($locale_id == $this->data['Document']['locale_id']): ?>
                        <li class="list-group-item"><?php echo $locale_name; ?></li>
                    <?php elseif (in_array($locale_id, array_keys($available_locales))): ?>
                        <li class="list-group-item"><?php echo $this->Html->link($locale_name, array('controller' => 'document_translations', 'action' => 'edit', $available_locales[$locale_id])); ?> </li>
                    <?php else: ?>
                        <li class="list-group-item"><?php echo $this->Html->link($locale_name, array('controller' => 'document_translations', 'action' => 'add', 'document_id' => $this->data['Document']['id'], 'locale_id' => $locale_id)); ?> </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

        <div class="actions">
            <h4><?php echo __('Files'); ?></h4>
            <ul class="list-group">
                <?php foreach ($documentFiles as $doc_file): ?>
                    <li class="list-group-item"><a target="_blank" href="<?php echo '/' . UPLOAD_FOLDER . '/' . urlencode(basename($doc_file['DocumentFile']['path'])); ?>"><?php echo $doc_file['DocumentFile']['name']; ?></a></li>
                <?php endforeach; ?>
            </ul><!-- /.list-group -->

            <div class="users form">
                <?php echo $this->Form->create('DocumentFile', array('type' => 'file', 'role' => 'form')); ?>
                <fieldset>
                    <div class="form-group">
                        <?php echo $this->Form->hidden('DocumentFile.is_login_required', array('value' => isset($this->data['Document']['is_login_required'])?1:0)); ?>
                        <?php echo $this->Form->input('DocumentFile.new_file', array('type' => 'file')); ?>
                    </div><!-- .form-group -->
                    <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
                </fieldset>
                <?php echo $this->Form->end(); ?>
            </div>

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
						<?php echo $this->Form->input('locale_id', array('class' => 'form-control', 'label' => __('Language'))); ?>
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