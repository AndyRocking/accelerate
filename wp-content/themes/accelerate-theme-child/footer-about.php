<?php
/**
 * The template for displaying the footer on the about page
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->
		<?php
			$twitter_link=get_field('twitter_link');
			$twitter_icon=get_field('twitter_icon');
			$fb_link=get_field('fb_link');
			$fb_icon=get_field('fb_icon');
			$linkedin_link=get_field('linkedin_link');
			$linkedin_icon=get_field('linkedin_icon');

		 ?>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>
				<div class="footer-social">
					<a href="<?php echo $twitter_link; ?>"><?php echo wp_get_attachment_image($twitter_icon); ?></a>
					<a href="<?php echo $fb_link; ?>"><?php echo wp_get_attachment_image($fb_icon); ?></a>
					<a href="<?php echo $linkedin_link; ?>"><?php echo wp_get_attachment_image($linkedin_icon); ?></a>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
