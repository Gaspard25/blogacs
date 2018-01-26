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
				<h2 class="text-center">L'écologie et la dématérialisation... On en parle ?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/monitor.png" class="img-fluid" alt="">
			</div>
		</div>
		<div class="row acd">
			<div class="col-12 col-lg-5 text-center">
				<p><i class="fa fa-address-book" aria-hidden="true"></i> Yohann THOREZ-DEBRUCQ</p>
			</div>
			<div class="col-12 col-lg-3 text-center">
				<p><i class="fa fa-comment" aria-hidden="true"></i> 1 Comment</p>
			</div>
			<div class="col-12 col-lg-4 text-center">
				<p><i class="fa fa-clock-o" aria-hidden="true"></i> 5 Janvier 2018</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 textart">
				<p>La dématérialisation, vraie-mauvaise idée?
					Cette vision était utopiste, idéaliste mais hélas erronée. La réalité des faits est assez divergente de l’idée originelle.  La plupart des gens continuent de croire que le simple fait d’envoyer un mail, que le simple fait de cliquer sur un lien ne consomme pratiquement rien. En tout cas, bien moins que l’impact énergétique de la fabrication d’une feuille de papier.  C’est foncièrement faux. Prenons quelques chiffres pour remettre les choses en contexte :

					Aujourd’hui 45% de la population mondiale a accès à internet, soit  3,4 milliards d’êtres humains.
					A chaque minute qui passe :
					4 millions de recherches Google sont réalisées
					277 000 tweets sont envoyés
					204 millions de mails sont échangés
					2,46 millions de contenus sont partagés sur Facebook
				</p>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/separation.jpg" alt="" class="separation">
<section id="commentaire" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-2 col-lg-3">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/jeanmi.jpg" alt="" class="photocom img-fluid">
			</div>
			<div class="col-10 col-lg-9">
				<div class="row auteurcom">
					<div class="col-5 col-lg-4 text-left">
						<p>Ecrit par Jean Mi</p>
					</div>
					<div class="col-7 col-lg-6 offset-lg-2 text-right">
						<p>5 Janvier 2018 à 18h30 <i class="fa fa-clock-o" aria-hidden="true"></i></p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/separation.jpg" alt="" width="325" class="separation2">
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-12 textcom">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dolores impedit distinctio eos sequi, error vitae aliquid dolorum exercitationem recusandae quas accusantium tenetur beatae, magnam qui dicta tempora quo molestias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae mollitia neque exercitationem vel perferendis natus aliquam quia libero aliquid facere, modi omnis obcaecati esse veritatis earum enim! Sapiente, tempore, quas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati non iure animi expedita numquam rerum asperiores ad dicta eius voluptate, accusantium delectus ut, dolor error similique, aliquam sit. Autem, hic.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="formulaire">
	<form action="" class="container-fluid">
		<div class="container">
			<h3 class="text-center formtitre">Laisser un commentaire</h3>
			<div class="row">
				<div class="col-lg-6">
					<input type="text" class="form-control" placeholder="Nom">
				</div>
				<div class="col-lg-6">
					<input type="email" class="form-control" placeholder="Adresse mail">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<input type="text" class="form-control" placeholder="Site web">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<input type="text" class="form-control formtext" placeholder="Votre commentaire">
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<button class="btn btn-dark" type="submit">Envoyer</button>
				</div>
			</div>
		</div>
	</form>
</section>



<?php get_footer(); ?>