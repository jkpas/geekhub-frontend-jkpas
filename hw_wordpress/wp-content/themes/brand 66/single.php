<?php get_header(); ?>
    <section class="content-wrapper">
        <section class="col-md-7 col-sm-12 col-xs-12 content">

   
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <section class="post-preview">
                <h2 class="welcome-message"><?php the_title( ); ?></h2> 
                <span><?php the_date('F j, Y'); ?></span>          
                <article><?php the_content(); ?></article>
                 <img alt="social-links" class="social-links" height="21" src="<?php bloginfo("template_url"); ?>/img/social-links.png" width="204">
               </section>  
               <?php comments_template(); ?>

                <?php endwhile; ?>
                  <?php if(function_exists('wp_paginate')) {
                     wp_paginate(); 
                   }
                ?>    
                <?php else: ?>
                <!-- no posts found --> 
                <?php endif; ?>          
         
        </section>
        
  <?php  get_sidebar(); ?>       
  <?php  get_footer(); ?>








<!-- 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
<!-- 	</div>#primary --> -->

