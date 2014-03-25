<div class="vspace-10 clearfix"></div>
<div class="row">
    <div class="info-content col-md-9">
        <div id="slideshow0" class="carousel slide" data-ride="carousel">
<!--            <ol class="carousel-indicators">-->
<!--                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--                <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--            </ol>-->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-rounded" src="http://merkent.com/bootstrap/image/cache/data/banner/samsung-banner-1170x220.jpg" alt="Samsung Tab 10.1">
                </div>
                <div class="item">
                    <img class="img-rounded" src="http://merkent.com/bootstrap/image/cache/data/banner/ipad-mini-1170x220.JPG" alt="iPad Mini">
                </div>
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