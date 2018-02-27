
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title>Cancoicode</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="container-fluid">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoT.png" class="img-fluid" alt="logoCancoicode">

	<div class="vide"></div>

	<?php require_once(get_template_directory() . '/includes/bootstrap-navwalker.php'); ?>

	<nav class="nav justify-content-between">

        <a class="navbar-brand" id="classico" href="/"><?php echo get_bloginfo(); ?></a>

        <ul class="nav" >
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
				'container' => 'nav',
				'container_id' => 'navbar',
				'container_class' => 'container-fluid menu',
				'menu_id' => false,
				'menu_class' => 'navbar-nav',
				'depth' => 2,
				'menu_class' => 'navbar-nav',
				'walker' => new Bootstrap_NavWalker(),
				'fallback_cb' => 'Bootstrap_NavWalker::fallback',
				) );
				?>
		</ul>

	</nav>
	</header>
