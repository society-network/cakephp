<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Admin Panel', '/admin', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Main'); ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Documents'), array('controller' => 'documents', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Translations'), array('controller' => 'document_translations', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Files'), array('controller' => 'document_files', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Menus'), array('controller' => 'menus', 'action' => 'index')); ?></li>
				</ul>
			</li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('System'); ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Categories'), array('controller' => 'categories', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Locales'), array('controller' => 'locales', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Dynamic Routes'), array('controller' => 'dynamic_routes', 'action' => 'index')); ?></li>
                </ul>
            </li>
            <li><?php
                if (AuthComponent::user('id')) {
                    echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout'));
                } else {
                    echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login'));
                }
                ?></li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->