<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title( '|', 'true', 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
	</head>
		<body>
			<header class="clearfix">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</header>
			<nav>
				<div class="container">
					<?php wp_nav_menu(); ?>
				</div>
				</nav>