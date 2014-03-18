<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please login'); ?>
        </legend>
        <?php
        echo $this->Form->input('email');
        echo $this->Form->Label('Password');
        echo $this->Form->password('password');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Login')); ?>
</div>