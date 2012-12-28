<?php
/**
 * The template for displaying all PAGES.
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <div>
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>') ); ?>
  </div>
  
  <?php comments_template( '', true ); ?>
  <?php endwhile; // end of the loop. ?>
            
<?php get_footer(); ?>