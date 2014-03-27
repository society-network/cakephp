<div class="row">
    <div class="col-md-4">
        <div class="users form">
            <h2><?php echo __('Please login'); ?></h2>
            <?php echo $this->Session->flash('auth'); ?>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('User', array('role' => 'form', 'inputDefaults' => array('class' => 'form-control'))); ?>
            <?php echo $this->Form->input('email', array(
                'div' => 'form-group',
            )); ?>
            <?php echo $this->Form->input('password', array(
                'div' => 'form-group',
            )); ?>
            <button type="submit" class="btn btn-default"><?php echo __('Login'); ?></button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="col-md-8"></div>
</div>