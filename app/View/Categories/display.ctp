<div class="vspace-10 clearfix"></div>
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Real Estate</h4></div>
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cat-list col-md-9">
        <ul class="media-list">
            <?php foreach($documents as $document): ?>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object well well-sm" src="/img/uip.png" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo isset($document['DocumentTranslation']['name'])?$document['DocumentTranslation']['name']:$document['Document']['name']; ?></h4>
                        <?php echo isset($document['DocumentTranslation']['summary'])?$document['DocumentTranslation']['summary']:$document['Document']['summary'];; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>