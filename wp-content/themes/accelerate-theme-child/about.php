<?php
/**
 *Template Name: About Page
 *The template for displaying the custom about page.
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- jumbotron section -->
<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->





<!--our services-->
<section class="our-services">
	<div class="site-content">
    <h4>Our Services</h4>


  </div> <!--site-content-->
</section> <!--our-services-->






<!-- content -->
	<div id="primary" class="site-content">
		<div id="content" role="main">
      <div class="contact-form">
			  <?php while ( have_posts() ) : the_post(); ?>
				  <?php the_content(); ?>
			  <?php endwhile; // end of the loop. ?>
      </div><!--.contact-form-->
		</div><!-- #content -->
	</div><!-- #primary -->

	<!--interested??-->
<hr>
<h2> Interested in working with us?</h2>
<a class="button" href="<?php echo home_url(); ?>/blog">Contact Us</a>
<hr>


<?php get_footer(); ?>
