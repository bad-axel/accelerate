<?php
/**
 *Template Name: 404 page
 *The template for displaying the custom 404 page.
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="four-oh-four-image">
  <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</section><!---four-oh-four-image-->

<section class="go-home">
  <a class="button" href="<?php echo home_url(); ?>/blog">Take me HOME.</a>
</section><!--go-home-->


<?php get_footer(); ?>
