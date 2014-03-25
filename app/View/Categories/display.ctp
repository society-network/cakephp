<div class="vspace-10 clearfix"></div>
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><?php echo $current_menu['Parent']['name']; ?></h4></div>
            <?php if (!empty($sub_menus)): ?>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                    <?php foreach ($sub_menus as $sub_menu): ?>
                        <li><?php echo $this->Html->link($sub_menu['Menu']['name'], $sub_menu['Menu']['url']); ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="cat-list col-md-9">
        <ul class="media-list">
            <?php foreach($documents as $document): ?>
                <li class="media">
                    <a class="pull-left" href="<?php echo '/info/'.$document['Document']['id']; ?>">
                    <?php if (!empty($document['DocumentTranslation']['thumbnail'])): ?>
                        <img class="thumbnail media-object well well-sm" src="<?php echo $document['DocumentTranslation']['thumbnail']; ?>" alt="<?php echo basename($document['DocumentTranslation']['thumbnail']); ?>">
                    <?php elseif (!empty($document['Document']['thumbnail'])): ?>
                        <img class="thumbnail media-object well well-sm" src="<?php echo $document['Document']['thumbnail']; ?>" alt="<?php echo basename($document['Document']['thumbnail']); ?>">
                    <?php else: ?>
                        <img class="thumbnail media-object well well-sm" src="/img/uip.png" alt="uip.png">
                    <?php endif; ?>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo isset($document['DocumentTranslation']['name'])?$document['DocumentTranslation']['name']:$document['Document']['name']; ?></h4>
                        <div class="summaries"><?php echo isset($document['DocumentTranslation']['summary'])?$document['DocumentTranslation']['summary']:$document['Document']['summary'];; ?></div>
                        <div class="details-link"><?php echo $this->Html->link(__('See Details'), '/info/'.$document['Document']['id'], array('class' => 'btn btn-default btn-sm')); ?></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>