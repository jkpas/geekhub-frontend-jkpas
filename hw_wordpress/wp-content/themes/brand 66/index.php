<?php get_header(); ?>
    <section class="content-wrapper">
        <section class="col-md-7 col-sm-12 col-xs-12 content">        

          <!-- <section class="post-preview">
            <h2>
              <a href="#">Wooden performance</a>
            </h2>
            <span>August 7, 2013</span>
            <article>If an advertiser drops a ball in the forest, does it make a sound? This conundrum seems to have been cleared up by a Japanese mobile phone manufacturer. In this automated extravaganza, a tiny wooden ball descends a wooden ramp. The result is an amazing rendition of Bach’s Jesu, Joy of Man’s Desiring. All this to promote a kidney-shaped smartphone with the tagline, “Touch Wood.”</article>
            <img alt="social-links" class="social-links" height="21" src="<?php bloginfo("template_url"); ?>/img/social-links.png" width="204">
            <div class="videowrapper">
              <iframe allowfullscreen="" height="315" src="https://www.youtube.com/embed/DzXtTdsJLtQ" width="560"></iframe>
            </div>
          </section>
          <section class="post-preview">
            <h2>
              <a href="#">Jack Crossing</a>
            </h2>
            <span>August 7, 2013</span>
            <article>While window shopping this morning on Behance, I ran across some stunning photographic pieces by designer Jack Crossing. Very nice, surreal imagery. Makes me long for the days of album art.</article>
            <img alt="social-links" class="social-links" height="21" src="<?php bloginfo("template_url"); ?>/img/social-links.png" width="204">
            <img alt="girl-in-a-helmet" height="627" src="<?php bloginfo("template_url"); ?>/img/girl-in-a-helmet.png" width="627">
          </section> -->


            <!-- Цикл wordpress "Loop" -->
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <section class="post-preview">
                <h2 class="welcome-message">
                  <a class="article_link" href="<?php the_permalink(); ?>"><?php the_title( ); ?></a>
                </h2> 
                <span><?php the_date('F j, Y'); ?></span>          
                <article><?php the_content(); ?></article>              
                 <img alt="social-links" class="social-links" height="21" src="<?php bloginfo("template_url"); ?>/img/social-links.png" width="204">
                 <p><?php the_tags() ?></p>
               </section>        
                <?php endwhile; ?>       

               <!-- Добавляем пагинацию -->
                 <!--  <footer class="post-navigation">
                     <?php
                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                          'format' => '?paged=%#%',
                          'current' => max( 1, get_query_var('paged') ),
                          'total' => $wp_query->max_num_pages,

                          'show_all'     => False,
                          'end_size'     => 0,
                          'mid_size'     => 3,
                          'prev_next'    => True,
                          'prev_text'    => __(''),
                          'next_text'    => __(''),
                          'type'         => 'plain',
                          'add_args'     => False,
                          'add_fragment' => '',
                          'before_page_number' => '',
                          'after_page_number' => ''
                        ) );
                      ?>
                  </footer> -->


                 <footer class="post-navigation">
           <!--  <footer class="post-navigation">      
            <div class="old">              
                <img alt="right-arrow" height="31" src="<?php bloginfo("template_url"); ?>/img/right.png" width="16">
                <?php next_posts_link( 'Old', "5" ); ?>                
            </div>
            <div class="new">
              <?php previous_posts_link( 'New', "5" ); ?>              
                <img alt="left-arrow" height="31" src="<?php bloginfo("template_url"); ?>/img/left.png" width="16">
            </div>
          </footer> -->


          <?php if(function_exists('wp_paginate')) {
               wp_paginate(); 
             }
          ?>    
               <?php else: ?>
                  <!-- no posts found --> 
               <?php endif; ?> 
             
          
         <!--  <footer class="post-navigation">
            <div class="old">
              <a href="#">
                <img alt="right-arrow" height="31" src="<?php bloginfo("template_url"); ?>/img/right.png" width="16">
                <span>Old</span>
              </a>
            </div>
            <div class="new">
              <a href="#">
                <span>New</span>
                <img alt="left-arrow" height="31" src="<?php bloginfo("template_url"); ?>/img/left.png" width="16">
              </a>
            </div>
          </footer> -->
        </section>


  <?php  get_sidebar(); ?>       
  <?php  get_footer(); ?>


