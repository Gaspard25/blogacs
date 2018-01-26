
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="UTF-8">
	<title>Cancoicode</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<header>
			<div class="container-fluid header">
				<div class="row">
					<div class="col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoT.png" class="img-fluid" alt="">
					</div>
				</div>
			</div>
			<div class="vide">

			</div>
			



<?php require_once(get_template_directory() . '/includes/bootstrap-navwalker.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container-fluid menu">
	<div class="row justify-content-end">
	
<a class="navbar-brand" id="classico" href="<?php bloginfo('url'); ?>">Cancoicode</a>

</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<?php
wp_nav_menu( array(
'theme_location' => 'menu-1',
'menu_id' => 'primary-menu',
'container' => 'div',
'container_id' => 'navbarNavDropdown',
'container_class' => 'container-fluid menu',
'menu_id' => false,
'menu_class' => 'navbar-nav mr-auto',
'depth' => 2,
'menu_class' => 'navbar-nav ml-auto',
'walker' => new Bootstrap_NavWalker(),
'fallback_cb' => 'Bootstrap_NavWalker::fallback',
) );
?>
</div>


						</div>
					</div>
				</div>
			</div>
	</header>



