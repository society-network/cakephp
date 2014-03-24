<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!-- /.navbar-toggle -->
                <?php echo $this->Html->Link('主頁', '/', array('class' => 'navbar-brand')); ?>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">房地產<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/real-estate">簡介</a></li>
                            <li><a href="#">樓花期房</a></li>
                            <li><a href="#">住宅</a></li>
                            <li><a href="#">廠房店面</a></li>
                            <li><a href="#">土地</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">商業<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">零售</a></li>
                            <li><a href="#">批發</a></li>
                            <li><a href="#">加盟</a></li>
                        </ul>
                    </li>
                    <li><a href="#">工作機會</a></li>
                    <li><a href="/contact-us">聯繫我們</a></li>
                    <li><?php
                        if (AuthComponent::user('id')) {
                            echo $this->Html->link(__('登出'), array('controller' => 'users', 'action' => 'logout'));
                        } else {
                            echo $this->Html->link(__('登入'), array('controller' => 'users', 'action' => 'login'));
                        }
                        ?></li>
                </ul><!-- /.nav navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </nav><!-- /.navbar navbar-default -->
    </div>
</div>
