<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!-- /.navbar-toggle -->
                <?php echo $this->Html->Link('Home', '/', array('class' => 'navbar-brand')); ?>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <?php foreach ($main_menu_items as $menu_item): ?>
                        <li class="dropdown">
                            <a href="<?php echo $menu_item['Menu']['url']; ?>" <?php if ($menu_item['children']): ?>class="dropdown-toggle" data-toggle="dropdown"<?php endif; ?>><?php echo $menu_item['Menu']['name']; ?>
                                <?php if ($menu_item['children']): ?>
                                    <b class="caret"></b>
                                <?php endif; ?>
                            </a>
                            <?php if ($menu_item['children']): ?>
                            <ul class="dropdown-menu">
                                <?php foreach ($menu_item['children'] as $sub_menu): ?>
                                    <li><a href="<?php echo $sub_menu['Menu']['url']; ?>"><?php echo $sub_menu['Menu']['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                    <li><?php
                        if (AuthComponent::user('id')) {
                            echo $this->Html->link(__('Logout'), array('plugin' => null, 'controller' => 'users', 'action' => 'logout'));
                        } else {
                            echo $this->Html->link(__('Login'), array('plugin' => null, 'controller' => 'users', 'action' => 'login'));
                        }
                        ?></li>
                </ul><!-- /.nav navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </nav><!-- /.navbar navbar-default -->
    </div>
</div>
