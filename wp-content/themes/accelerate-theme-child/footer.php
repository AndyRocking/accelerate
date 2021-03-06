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

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>
				<div class="footer-social">
					<a href="http://twitter.com"><img src="/wp-content/uploads/2016/11/twitter.png"/></a>
					<a href="http://facebook.com"><img src="/wp-content/uploads/2016/11/fb.png"/></a>
					<a href="http://linkedin.com"><img src="/wp-content/uploads/2016/11/linkedin.png"/></a>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
