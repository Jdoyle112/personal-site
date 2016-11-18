<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	<div class="section contact" id="contact">
		<div class="container">
			<div class="heading">
				<h2>Contact</h2>
				<p>"If I had asked people what they wanted, they would have said faster horses."</p>
				<span>- Henry Ford</span>
				<div class="underline"></div>
			</div>
			<div class="content">
				<p>Want to get in touch?</p>
				<a href="#" class="contact-btn">Say Hello</a>
			</div>
		</div>
	</div>
		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>

			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
