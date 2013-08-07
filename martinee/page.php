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
    
    <?php //comments_template( '', true ); ?>
    <div id="fb-root"></div>  
    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>  
    <fb:comments href="<?php the_permalink(); ?>" data-num-posts="10" data-width="500"></fb:comments>  
  <?php endwhile; // end of the loop. ?>
            
<?php get_footer(); ?>