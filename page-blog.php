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
					<div class="row">
						<div class="col-lg-12 articles">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/imgarticle.jpg" class="imgBlog" alt="Image Article"></a>
							<div class="col-lg-12">
								<h4>Les chats sont-ils comestibles ?</h4>
								<p class="date">01/07/2018 - Jean Mi</p>
							</div>
							<div class="zone">
								
							</div>
							<p class="extrait">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt error cumque fugit quasi voluptatum provident adipisci. Pariatur, praesentium perferendis. Sapiente optio deleniti reiciendis corrupti quidem voluptatibus, rerum sit, ab dicta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum illo hic aut voluptatem, nobis est. Porro recusandae ratione vitae amet possimus, dolore nostrum explicabo esse, quo saepe accusamus facere corrupti!</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 articles">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/imgarticle.jpg" class="imgBlog" alt="Image Article">
							<div class="col-lg-12">
								<h4>Les chats sont-ils comestibles ?</h4>
								<p class="date">01/07/2018 - Jean Mi</p>
							</div>
							<div class="zone">
								
							</div>
							<p class="extrait">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt error cumque fugit quasi voluptatum provident adipisci. Pariatur, praesentium perferendis. Sapiente optio deleniti reiciendis corrupti quidem voluptatibus, rerum sit, ab dicta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum illo hic aut voluptatem, nobis est. Porro recusandae ratione vitae amet possimus, dolore nostrum explicabo esse, quo saepe accusamus facere corrupti!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	</main>
<?php get_footer(); ?>