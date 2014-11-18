This is the single
<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>



	<section class="blog-page">

	<div class="container wrap">

	<div class="main-content">




			<article class="post-entry individual-post">
				<div class="entry-wrap">




			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
					?>

				 <!-- moved entry footer from here -->








<div class="comments-area">


				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div>

		</div><!-- #content -->

</div>
<?php
get_sidebar(); ?>
</div>

</article>

</section>

<?php

get_footer(); ?>
