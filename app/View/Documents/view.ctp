<div class="vspace-10 clearfix"></div>
<div class="row">
    <div class="info-content col-md-9">
        <div id="slideshow0" class="carousel slide" data-ride="carousel">
<!--            <ol class="carousel-indicators">-->
<!--                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--                <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--            </ol>-->
            <div class="carousel-inner">
                <?php if ($cover_img): ?>
                    <?php $img_count = count($cover_img); for ($i = 0; $i < $img_count; $i++): ?>
                        <div class="item <?php echo ($i==0)?'active':''; ?>">
                            <img class="img-rounded img" src="<?php echo $cover_img[$i]; ?>" alt="<?php echo $cover_img[$i]; ?>">
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
<!--            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">-->
<!--                <span class="glyphicon glyphicon-chevron-left"></span>-->
<!--            </a>-->
<!--            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">-->
<!--                <span class="glyphicon glyphicon-chevron-right"></span>-->
<!--            </a>-->
        </div>
        <div>
            <h2><?php echo $name; ?></h2>
        </div>
        <div>
            <p><?php echo $body; ?></p>
        </div>
        <div>
            <?php if ($files): ?>
            <p><ul>
                <?php foreach ($files as $file): ?>
                    <li>
                        <?php echo $this->Html->link($file['name'], array('controller' => 'document_files', 'action' => 'get', $file['id'])); ?>
                    </li>
                <?php endforeach; ?>
            </ul></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Submit Your Inquiry</h4></div>
            <div class="panel-body">
                <div class="info-contact form">
                    <?php echo $this->Form->create('Contactform.Contactform', array('role' => 'form')); ?>
                    <fieldset>
                        <div class="form-group">
                            <?php echo $this->Form->input('Name', array('class' => 'form-control')); ?>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <?php echo $this->Form->input('Email', array('class' => 'form-control')); ?>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <?php echo $this->Form->input('Phone', array('class' => 'form-control')); ?>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <?php echo $this->Form->input('Message', array('class' => 'form-control')); ?>
                        </div><!-- .form-group -->
                        <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
                    </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div><!-- /.form -->
            </div>
        </div>
    </div>
</div>