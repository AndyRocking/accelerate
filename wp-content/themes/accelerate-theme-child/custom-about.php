<?php
/*
 * Template Name: Custom About
 * Description: About Us Page
 */

// Additional code goes here...


get_header(); ?>
<section class="home-page">
	<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				$our_services=get_field('our-services');
				$service_1_title=get_field('service_1_title');
				$service_1_image=get_field('service_1_image');
				$service_1_blurb=get_field('service_1_blurb');
				$service_2_title=get_field('service_2_title');
				$service_2_image=get_field('service_2_image');
				$service_2_blurb=get_field('service_2_blurb');
				$service_3_title=get_field('service_3_title');
				$service_3_image=get_field('service_3_image');
				$service_3_blurb=get_field('service_3_blurb');
				$service_4_title=get_field('service_4_title');
				$service_4_image=get_field('service_4_image');
				$service_4_blurb=get_field('service_4_blurb');
			 ?>
			 <div class="site-content">
				 <div class="homepage-hero about-hero">
			 <h3><?php the_content(); ?></h3>
		 </div></div>
</section>
							<div class="about-us">

									<h1>Our Services</h1>
								<h2><?php echo $our_services; ?></h2>
							</div>
							<div class="services">
								<div class="service1">
								<?php echo wp_get_attachment_image( $service_1_image ); ?>
								<span class="serviceLabel"><?php echo $service_1_title; ?></span>
								<?php echo $service_1_blurb; ?>
							 </div>

							 <div class="service2">
								<?php echo wp_get_attachment_image( $service_2_image ); ?>
								<span class="serviceLabel"><?php echo $service_2_title; ?></span>
								<?php echo $service_2_blurb; ?>
							</div>
							<div class="service3">
							<?php echo wp_get_attachment_image( $service_3_image ); ?>
							<span class="serviceLabel"><?php echo $service_3_title; ?></span>
							<?php echo $service_3_blurb; ?>
						 </div>
						 <div class="service4">
						 <?php echo wp_get_attachment_image( $service_4_image ); ?>
						 <span class="serviceLabel"><?php echo $service_4_title; ?></span>
						 <?php echo $service_4_blurb; ?>
						</div>
						<div class="about-contact">
							<span>Interested in working with us? </span><a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
						</div>
						</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer('about'); ?>
