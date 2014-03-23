<div class="clearfix">
    <div class="pull-right text-right">
        <?php $current_local =  $this->Session->read('Config.locale'); ?>
        <p><?php if ($current_local['code'] == 'zh-TW'): ?>
            <?php echo $this->Html->link(__('English'), array('plugin' => null, 'controller' => 'locales', 'action' => 'set_by_code', 'en-AU'), array('class' => '')); ?>
        <?php else: ?>
            <?php echo $this->Html->link(__('繁體中文'), array('plugin' => null, 'controller' => 'locales', 'action' => 'set_by_code', 'zh-TW'), array('class' => '')); ?>
        <?php endif; ?></p>
    </div>
    <a href="/">United Investment Properties</a>
</div>