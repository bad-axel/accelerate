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
			<div class='services-header'>
				<h1><?php the_content(); ?></h1>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->



<!--our services-->
	<div class="site-content">









<!-- content -->
	<div id="primary" class="site-content">
		<div id="content" role="main">
      <div class="about-page">
				<?php while ( have_posts() ) : the_post();
				  $our_services = get_field('our_services');
					$content_strategy_title = get_field('content_strategy_title');
					$content_strategy_image = get_field('content_strategy_image');
					$content_strategy_text = get_field('content_strategy_text');
					$influencer_mapping_title = get_field('influencer_mapping_title');
					$influencer_mapping_image = get_field('influencer_mapping_image');
					$influencer_mapping_text = get_field('influencer_mapping_text');
					$social_media_title = get_field('social_media_title');
					$social_media_image = get_field('social_media_image');
					$social_media_text = get_field('social_media_text');
					$design_development_title = get_field('design_development_title');
					$design_development_image = get_field('design_development_image');
					$design_development_text = get_field('design_development_text');
					$size = 'thumbnail';
				?>

<div class="our-services">
				<h3>Our Services</h3>
				<?php echo $our_services; ?>
</div>

<div class="content-strategy">
<div class = "content-strategy-image">
        <?php echo wp_get_attachment_image( $content_strategy_image, $size ); ?>
</div> <!--content-strategy-image-->
<div class = "content-strategy-text">
	      <h4><?php echo $content_strategy_title; ?></h4>
		    <?php echo $content_strategy_text; ?>
</div> <!--content-strategy-text-->
</div>

<div class="influencer-mapping">
<div class = "influencer-mapping-text">
	      <h4><?php echo $influencer_mapping_title; ?></h4>
				<?php echo $influencer_mapping_text; ?>
</div> <!--influencer-mapping-text-->
<div class = "influencer-mapping-image">
				<?php echo wp_get_attachment_image( $influencer_mapping_image, $size ); ?>
</div> <!--influencer-mapping-image-->
</div>

<div class="social-media">
<div class = "social-media-image">
				<?php echo wp_get_attachment_image( $social_media_image, $size ); ?>
</div> <!--social-media-image-->
<div class = "social-media-text">
	      <h4><?php echo $social_media_title; ?></h4>
		    <?php echo $social_media_text; ?>
</div> <!--social-media-text-->
</div>



<div class="design-development">
<div class = "design-development-text">
        <h4><?php echo $design_development_title; ?></h4>
				<?php echo $design_development_text; ?>
</div> <!--design-development-text-->
<div class = "design-development-image">
				<?php echo wp_get_attachment_image( $design_development_image, $size ); ?>
</div> <!--design-development-text-->
</div>




			  <?php endwhile; // end of the loop. ?>



		</div> <!--site-content-->


	<!--interested??-->
<hr>

<div class="interested">
<h2>Interested in working with us?</h2>
<a class="button" href="<?php echo home_url(); ?>/blog">Contact Us</a>
</div>



</div><!--.about-page-->
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
