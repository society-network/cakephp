<!--div class="vspace-10 clearfix"></div-->
<div class="row">
    <div class="col-md-12">
        <div id="slideshow0" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php if ($cover_img): ?>
                    <?php $img_count = count($cover_img); for ($i = 0; $i < $img_count; $i++): ?>
                        <div class="item <?php echo ($i==0)?'active':''; ?>">
                            <img class="img-rounded img" src="<?php echo $cover_img[$i]; ?>" alt="<?php echo $cover_img[$i]; ?>">
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"><br/>
        <?php echo $body; ?>
    </div>
</div>