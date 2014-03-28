<div class="table-responsive">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th><?php echo __('Name'); ?></th>
            <th><?php echo __('Type'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($documentFiles as $documentFile): ?>
        <tr>
            <td><a target="_blank" href="<?php echo '/uploads/' . urlencode(basename($documentFile['DocumentFile']['path'])); ?>"><?php echo h($documentFile['DocumentFile']['name']); ?></a>&nbsp;</td>
            <td><?php echo h($documentFile['DocumentFile']['type']); ?>&nbsp;</td>
            <td class="actions">
                <?php //echo $this->Html->link(__('View'), array('controller' => 'document_files', 'action' => 'view', $documentFile['DocumentFile']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                <?php echo $this->Html->link(__('Download'), array('plugin' => null, 'controller' => 'document_files', 'action' => 'get', $documentFile['DocumentFile']['id']), array('class' => 'btn btn-default btn-xs', 'target' => '_blank')); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'document_files', 'action' => 'edit', $documentFile['DocumentFile']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'document_files', 'action' => 'delete', $documentFile['DocumentFile']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $documentFile['DocumentFile']['id'])); ?>
            </td>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.table-responsive -->
