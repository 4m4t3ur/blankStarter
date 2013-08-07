<?php
/**
 * The template for displaying POST LISTING.
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  
  <div class="printedContent">
    <?php // the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
    <?php the_excerpt(); ?>
  </div>
    
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<br /><br />

<?php get_footer(); ?>