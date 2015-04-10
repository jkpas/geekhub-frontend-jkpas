<?php get_header(); ?>
    <section class="content-wrapper">
        <section class="col-md-7 col-sm-12 col-xs-12 content">

          <h2 class="welcome-message">Search result</h2>

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
                  <footer class="post-navigation">
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
                  </footer>


                <?php else: ?>
                <p>No results :(</p> 
                <?php endif; ?> 


          
          
        
  