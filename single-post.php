<?php
/*
Template name: Post
*/
?>


<?php get_header(); ?>


<section id="article" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-center"><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
			</div>
		</div>
		<div class="row acd">
			<div class="col-12 col-lg-5 text-center">
				<p><i class="fa fa-address-book" aria-hidden="true"></i> <?php echo get_the_author(); ?></p>
			</div>
			<div class="col-12 col-lg-3 text-center">
				<p><i class="fa fa-comment" aria-hidden="true"></i> <?php comments_number( 'Pas de commentaires', '1 commentaire', '% commentaires' ); ?></p>
			</div>
			<div class="col-12 col-lg-4 text-center">
				<p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date(); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 textart">
				<p><?php echo get_the_content(); ?></p>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/separation.jpg" alt="" class="separation">

<section id="commentaire" class="container-fluid">
	<div class="container">
		<div class="row">
			<?php
			while ( have_posts() ) : the_post();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div>
</section><!-- #main -->




<?php get_footer(); ?>
