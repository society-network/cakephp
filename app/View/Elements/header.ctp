<div class="row">
    <div class="col-md-6">
        <a href="/"><?php echo $this->Html->image('uip.png', array('class' => 'img-responsive', 'alt' => 'United Investment Properties')); ?></a>
    </div>
    <div class="col-md-6 text-right">
        <?php $current_local =  $this->Session->read('Config.locale'); ?>
        <p><?php if ($current_local['code'] == 'zh-TW'): ?>
            <?php echo $this->Html->link(__('English'), array('plugin' => null, 'controller' => 'locales', 'action' => 'set_by_code', 'en-AU'), array('class' => '')); ?>
        <?php else: ?>
            <?php echo $this->Html->link(__('繁體中文'), array('plugin' => null, 'controller' => 'locales', 'action' => 'set_by_code', 'zh-TW'), array('class' => '')); ?>
        <?php endif; ?></p>
    </div>
</div>