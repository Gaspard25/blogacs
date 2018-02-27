<?php
/*
Template name: HomeM
*/
?>


<?php get_header(); ?>


<div class="container">
  <div class="sujets text-center">
    <h1>Articles Récents</h1>
  </div>
</div>

<div class="container-fluid nos_articles">
  <div class="container">
    <div class="row">

      <!-- DEBUT DE BOUCLE -->

          <?php

          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page' => 4,
            'paged' => $paged );
            query_posts($args);

            /*query_posts('post_type=post'); */
            if(have_posts()) :
              while(have_posts()) : the_post(); ?>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="project">
                  <figure class="img-responsive canard" style="background-image:url(<?php the_post_thumbnail_url(); ?>); background-size:cover;background-position:center; background-repeat:no-repeat">
                    <img src="image.jpg" alt="" />
                    <p> <?php the_title(); ?> </p>
                    <div class="actions"></div>
                    <div class="ligne"></div>

                        <span class="plus text-center">
                          <a href="<?php the_permalink()?>">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve" width="50px" height="50px">
                        <path d="M37.059,16H26V4.941C26,2.224,23.718,0,21,0s-5,2.224-5,4.941V16H4.941C2.224,16,0,18.282,0,21s2.224,5,4.941,5H16v11.059  C16,39.776,18.282,42,21,42s5-2.224,5-4.941V26h11.059C39.776,26,42,23.718,42,21S39.776,16,37.059,16z" fill="#FFFFFF"/>
                      </svg>
                      <p>Voir plus</p>
                    </a></span>
                  </figure>
                  <div class="resume"><?php echo get_the_excerpt(); ?>
                  </div>
                </div>
              </div>
              <?php endwhile;
            else :
              echo'<p>Pas de contenu trouvé</p>';
            endif; ?>
            <?php wp_reset_query(); ?>


                </div>
              </div>
            </div>


        <div class="container text-center">
          <button type="button" class="btn btn-secondary btn-lg lire">Plus d'Articles</button>
        </div>

        <div class="container text-center">
          <h1 class="equipe">Equipe ACS</h1>
        </div>

        <!--Caroussel-->


        <div id="carouselExampleIndicators" class="container carousel slide text-center" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active next"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="next"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="next"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class="next"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!--Trio 1-->
            <div class="carousel-item active">
              <div class="container">
                <div class="row carousel">
                  <div class="col-lg-12 border-top">
                    <div class="triangle-left"></div>
                  </div>
                  <div class="col-lg-4 card-1 photoA">
                    <div class="card-img-top"></div>
                    <div class="card-block">
                      <h4 class="card-title">Antoine</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-2 photoF">
                    <div class="card-img-top"></div>
                    <div class="card-block">
                      <h4 class="card-title">Floriane</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-3 photoB">
                    <div class="card-img-top"></div>
                    <div class=" card-block">
                      <h4 class="card-title">Benoît</h4>
                    </div>
                  </div>

                  <div class="border-top">
                    <div class="triangle-right"></div>
                  </div>
                </div>
              </div>
            </div>
            <!--Trio 2-->
            <div class="carousel-item">
              <!--Caroussel-->
              <div class="container">

                <div class="row carousel">
                  <div class="col-lg-12 border-top">
                    <div class="triangle-left"></div>
                  </div>
                  <div class="col-lg-4 card-1 photoC">
                    <div class="card-img-top "></div>
                    <div class="card-block">
                      <h4 class="card-title">Charlie</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-2 photoM">
                    <div class="card-img-top" ></div>
                    <div class="card-block">
                      <h4 class="card-title">Magali</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-3 photoR">
                    <div class="card-img-top "></div>
                    <div class=" card-block">
                      <h4 class="card-title">Romain</h4>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="triangle-right"></div>
                  </div>
                </div>
              </div>
            </div>
            <!--Trio 3-->
            <div class="carousel-item">
              <!--Caroussel-->
              <div class="container">

                <div class="row carousel">
                  <div class="col-lg-12 border-top">
                    <div class="triangle-left"></div>
                  </div>
                  <div class="col-lg-4 card-1 photoAn">
                    <div class="card-img-top"></div>
                    <div class="card-block">
                      <h4 class="card-title">Anthony</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-2 photoL">
                    <div class="card-img-top"></div>
                    <div class="card-block">
                      <h4 class="card-title">Lucie</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-3 photoY">
                    <div class="card-img-top"></div>
                    <div class=" card-block">
                      <h4 class="card-title">Yohann</h4>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="triangle-right"></div>
                  </div>
                </div>
              </div>
            </div>
            <!--Trio 4-->
            <div class="carousel-item">
              <!--Caroussel-->
              <div class="container">
                <!-- <div class="test"></div>    -->
                <div class="row carousel">
                  <div class="col-lg-12 border-top">
                    <div class="triangle-left"></div>
                  </div>
                  <div class="col-lg-4 card-1 photoK">
                    <div class="card-img-top"></div>
                    <div class="card-block">
                      <h4 class="card-title">Kevin</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-2 photoS">
                    <div class="card-img-top"></div>
                    <div class="card-block">
                      <h4 class="card-title">Sandrine</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 card-3 photoMo">
                    <div class="card-img-top"></div>
                    <div class=" card-block">
                      <h4 class="card-title">Mourad</h4>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="triangle-right"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>


        <?php get_footer(); ?>
