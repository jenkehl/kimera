<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

	<!--	</div> #main -->
		<!-- <div class="clearfix"></div> -->

		<?php if( !is_front_page() ) { ?>
		<footer class="navigation container">
			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<p><a href="<?php echo get_bloginfo('url') ?>">_&copy; <?php echo date ('Y') ?> Skillcrush / Jen Kehl</a></p>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php } ?>

	<?php wp_footer(); ?>
</body>
</html>
