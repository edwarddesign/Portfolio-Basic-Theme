<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head();?>
</head>
<body>
	
		<nav class=" navbar navbar-inverse navbar-static-top"  style="background-color:#000;">
			<div class="container"  style="background-color:#000;"> 
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  	<button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				  	</button>
				  	<a class="navbar-brand" href="<?php bloginfo('url'); ?>/home">My portfolio</a>
				</div>
				<!--toggle -->
				<div class="collapse navbar-collapse pullRight" id="bs-example-navbar-collapse-1">
				  	<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php bloginfo('url'); ?>/home">Home</a>
				    	<li><a href="<?php bloginfo('url'); ?>/about">About</a>
						<li><a href="<?php bloginfo('url'); ?>/projects">Projects</a>
						<li><a href="<?php bloginfo('url'); ?>/contact-me">Contact</a>
				  	</ul>
				  
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

