<nav class="navbar navbar-inverse" role="navigation">
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
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Real Estate<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/real-estate">Overview</a></li>
					<li><a href="#">Off Plan</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Commercial</a></li>
					<li><a href="#">Site</a></li>
				</ul>
			</li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Business<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Retails</a></li>
                    <li><a href="#">Wholesale</a></li>
                    <li><a href="#">Franchise</a></li>
                </ul>
            </li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Contact Us</a></li>
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