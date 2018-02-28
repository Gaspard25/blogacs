
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
	<div class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoT.png" class="logoCancoicode" alt="logoCancoicode"></div>
	<div class="vide"></div>

	<?php require_once(get_template_directory() . '/includes/bootstrap-navwalker.php'); ?>

	<section class="nav">
		<div class="container d-flex justify-content-between">
        <a class="navbar-brand" id="logoNav" href="/"><?php echo get_bloginfo(); ?></a>
        
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
				'container' => 'li',
				'container_id' => 'navbar',
				'container_class' => 'container',
				'menu_id' => false,
				'menu_class' => 'navbar-nav',
				'depth' => 2,
				'walker' => new Bootstrap_NavWalker(),
				'fallback_cb' => 'Bootstrap_NavWalker::fallback',
				) );
				?>
		
		</div>
	</section >
	</header>
