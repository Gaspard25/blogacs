<?php
/*
Template name: Blog
*/
?>


<?php get_header(); ?>
	<main>
	<section id="blog" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12">
							<h3>Post promo</h3>
						</div>
					</div>
					<?php 
						$users = get_users();

						foreach($users as $user){ 

							$user_post_count = count_user_posts($user->id);
							$current_user_posts = get_posts( $args );

							$username = $user->display_name;
					?>
					<div class="row">
						<div class="col-lg-4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bourriquet.jpg" alt="">
						</div>
						<div class="col-lg-4 blocname">
							<p><?php echo $username ?></p>
						</div>
						<div class="col-lg-4 nbposts">
							<p class="numposts"><?php echo $user_post_count ?></p>
						</div>
					</div>
					<?php
						}
					?>
				</div>
				<div class="col-lg-8 offset-lg-1">
				<?php 
				
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array(
									'posts_per_page' => 3,
									'paged' => $paged );
				query_posts($args);
				if(have_posts()) :
                    while(have_posts()) : the_post();
				?>
					<div class="row">
						<div class="col-lg-12 articles">
							<img src="<?php the_post_thumbnail_url(); ?>" class="imgBlog" alt="Image Article"></a>
							<div class="col-lg-12">
								<h4><?php the_title(); ?></h4>
								<p class="date"><?php echo get_the_date();?> - <?php the_author(); ?></p>
							</div>
							<div class="zone">
								
							</div>
							<p class="extrait"><?php echo get_the_excerpt(); ?></p>
						</div>
					</div>
				<?php 
                    endwhile;
                                    
                 ?>
					<!-- Pagination -->
					<div class="row">
					<?php wpbeginner_numeric_posts_nav(); ?>
								<?php
								
								else :
									echo'<p>Pas de contenu trouvé</p>';
								endif;
								
								?>
					</div>
				</div>
			</div>
		</div>
	</section>

	</main>
<?php get_footer(); ?>