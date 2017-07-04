<?php get_header(); ?>



	<div id="primary" class="site-content">
		<div id="content" role="main">

      <?php while ( have_posts() ) : the_post();
      	$services = get_field('services');
      	$client = get_field('client');
      	$link = get_field('site_link');
        $image_1 = get_field('image_1');
				$size = 'full';
      ?>

      <article class="case-study">
      	<aside class="case-study-sidebar">
      		<h2><?php the_title(); ?></h2>
      		<h5><?php echo $services; ?></h5>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php echo $link; ?>">View Project  &#8250;</a></p>
      	</aside><!--case-study-sidebar-->

      	<div class="case-study-images">
      		<a href="<?php echo $link; ?>">
            <?php if($image_1) { ?>
               <?php echo wp_get_attachment_image( $image_1, $size ); ?>
      		  <?php } ?>
          </a>
      	</div><!--case-study-images-->
      </article><!--case-study-->

			<?php endwhile;
			?>

  </div><!-- #content/ main -->
 </div><!-- #primary .site-content-->

<?php get_footer(); ?>
