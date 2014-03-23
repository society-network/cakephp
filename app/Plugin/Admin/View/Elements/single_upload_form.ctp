<h4><?php echo __('Uploads'); ?></h4>
<div class="users form">
    <?php echo $this->Form->create('DocumentFile', array('type' => 'file', 'role' => 'form')); ?>
    <fieldset>
        <div class="form-group">
            <?php echo $this->Form->hidden('DocumentFile.is_login_required', array('value' => isset($this->data['Document']['is_login_required'])?1:0)); ?>
            <?php echo $this->Form->input('DocumentFile.new_file', array('type' => 'file', 'label' => false)); ?>
        </div><!-- .form-group -->
        <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>