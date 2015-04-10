<?php get_header(); ?>
    <section class="content-wrapper">
        <section class="col-md-7 col-sm-12 col-xs-12 content">

          <h2 class="welcome-message"><?php single_cat_title( "Category: "); ?> </h2>

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
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found --> 
                <?php endif; ?> 

          
          <footer class="post-navigation">
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
          </footer>
        </section>
        
  <?php  get_sidebar(); ?>       
  <?php  get_footer(); ?>